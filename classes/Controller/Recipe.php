<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Recipe Controller
 *
 * @package    Cookbook
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Recipe extends Controller_Template {

	/**
	 * Global result limit
	 * @var string
	 */
	public $_limit = 30;

	/**
	 * List available recipes
	 *
	 * @return void
	 */
	public function action_Index()
	{
		// Setup view
		$this->view = View::factory('Recipe/List')
		->bind('items', $items)
		->set('limit', $this->_limit)
		->set('offset', 0)
		->set('q', $this->request->query());

		// Get recipes
		$items = $this->search(array(), array(
			'offset' => 0,
			'limit' => $this->_limit
		));
	}

	/**
	 * Search available recipes
	 * 
	 * @return void
	 */
	public function action_search()
	{
		// only serve on GET method
		if ($this->request->is_ajax() AND $this->request->method() == HTTP_Request::GET)
		{
			// disable auto rendering
			$this->auto_render = FALSE;

			// get the http request query
			$query = $this->request->query();

			$settings = array(
				'offset' => intval(Arr::get($query, 'offset', 0)),
				'limit' => $this->_limit
			);

			$items = $this->search($query, $settings);

			$search_identifier = substr(hash_hmac('sha1', http_build_query($query), 'sq'), 0, 12);

			$stats = Profiler::application();

			$response = array(
				'items' => array(),
				'offset' => $settings['offset'],
				'limit' => $settings['limit'],
				'identifier' => $search_identifier,
				'_stats' => array(
					'executions' => $stats['count'],
					'time' => $stats['current']['time'] * 1000,
					'memory' => $stats['current']['memory'] / 1024
				)
			);

			$cache = Cache::instance('sqlite');
			$cache->set($search_identifier, http_build_query($query), 86400 * 7);
		
			foreach ($items as $item)
			{
				$response['items'][] = array(
					'id' => intval($item->id),
					'name' => $item->name,
					'preptime' => $item->preptime,
					'cooktime' => $item->cooktime,
					'nutritions' => $item->nutritions,
					'serves' => $item->serving_size,
					'tags' => $item->tags,
					'user_id' => intval($item->user_id)
				);
			}

			$this->response->body(json_encode($response));
		}
		else
		{
			// setup view
			$this->view = View::factory('recipe/list')
			->bind('categories', $categories)
			->bind('items', $items)
			->set('limit', $this->_limit)
			->set('offset', 0);
	
			// get categories
			$categories = ORM::factory('Category')->find_all();

			$cache = Cache::instance('sqlite');

			parse_str($cache->get($this->request->param('id')), $output);

			$this->view->q = $output;

			// items
			$items = $this->search($output, array(
				'offset' => 0,
				'limit' => $this->_limit
			));
		}
	}

	/**
	 * Recipe detail
	 * 
	 * @param int Recipe ID
	 * @return void
	 */
	public function action_Detail()
	{
		// Setup view
		$this->view = View::factory('Recipe/Detail')
		->bind('item', $item)
		->bind('nutrition', $nutrition)
		->bind('units', $units);

		// Get recipe
		$item = ORM::factory('Recipe', $this->request->param('id'));

		// Throw 404 when recipe not loaded
		if ( ! $item->loaded())
			throw new HTTP_Exception_404();

		// Get nutrition information and load view
		$nutrition = View::factory('Recipe/Nutrition')
		->set('item', $item->nutritions())
		->set('serving', $item->serving_size);

		// Find all units
		$units = ORM::factory('Unit')
		->find_all()
		->as_array('id', 'short');

		// Set page title
		$this->template->title = $item->name;
	}

	/**
	 * Recipe photo
	 * 
	 * @param int Recipe ID
	 * @return void
	 */
	public function action_Photo()
	{
		// Load recipe
		$recipe = ORM::factory('Recipe', $this->request->param('id'));

		// Available sizes and size from URI
		$sizes = ['thumb.jpg' => [100, 100], 'large.jpg' => [800, 600]];
		$size = $this->request->param('params');

		// Did not find recipe photo or size requested
		if ( ! $recipe->loaded() OR $recipe->photo === NULL OR ! isset($sizes[$size]))
			throw new HTTP_Exception_404();

		// Disable auto render
		$this->auto_render = FALSE;

		// Create file path
		$path = APPPATH.'media/recipe/'.hash('sha1', $recipe->photo).($size === 'thumb.jpg' ? '.thumb' : NULL).'.jpg';

		// Check if recipe file exists
		if ( ! file_exists($path))
		{
			// Write original image to disk
			@file_put_contents($path, $recipe->photo);

			// Resize image from disk
			$image = Image::factory($path)
			->resize($sizes[$size][0], $sizes[$size][1])
			->render('jpg', 80);

			// Replace its original content with resized one
			@file_put_contents($path, $image);
		}

		// Forward Media module request to its own response
		$this->response = Request::factory(substr($path,strlen(APPPATH)))->execute();
	}

	/**
	 * Create new recipe
	 *
	 * @return void
	 */
	public function action_Create()
	{
		$this->view = View::factory('Recipe/Fieldset')
		->bind('form', $form);

		$item = ORM::factory('Recipe');

		$form = Form::factory($item);

		// $recipe = $this->process_fieldset();
	}

	/**
	 * Recipe edit
	 *
	 * @return void
	 */
	public function action_Edit()
	{
		$this->view = View::factory('recipe/fieldset')
		->bind('item', $recipe)
		->bind('errors', $errors)
		->bind('success', $success);

		$recipe = ORM::factory('Recipe', $this->request->param('id'));

		if (Auth::instance()->logged_in('admin') OR Auth::instance()->get_user()->id !== $recipe->user_id)
		{
			$recipe = $this->process_fieldset($recipe);
		}
		else
		{
			$this->view = View::factory('misc/unauthorized');
		}
	}


	/**
	 * Process fieldset POST array
	 * 
	 * @param int Recipe ID
	 * @return ORM
	 */
	private function process_fieldset($recipe = NULL)
	{
		// check for recipe object
		if ($recipe == NULL)
		{
			$recipe = ORM::factory('Recipe');
		}

		$edit = $recipe->loaded();

		// check if request method is POST
		if ($this->request->method() == HTTP_Request::POST)
		{
			// load $_POST object
			$post = $this->request->post();

			// load post values to recipe object
			$recipe->values($post, array(
				'name',
				'description',
				'cooktime',
				'preptime',
				'serving_size',
				'serving_type',
				'source',
				'tags'
			));

			// recipe public flag only when admin
			$recipe->public = ($this->user->logged_in('admin') ? 1 : 0);

			// check for the photo
			if ( ! empty($_FILES['photo']['tmp_name']))
			{
				$recipe->photo = file_get_contents($_FILES['photo']['tmp_name']);
			}

			// try recipe for validation
			try
			{
				// save recipe 
				$recipe->save();

				// add categories
				foreach (ORM::factory('Category')->find_all() as $cat)
				{
					// remove category from recipe
					$recipe->remove('categories', $cat);

					// check if category is wanted
					if (isset($post['category']) AND in_array($cat->id, $post['category']))
					{
						// add category to recipe
						$recipe->add('categories', $cat);
					}
				}

				// remove all ingredients before re-insertion
				DB::delete('recipe_ingredient')
				->where('recipe_id', '=', $recipe->id)
				->execute();
	
				// ingredients re-add
				foreach ($post['unit'] as $k => $item)
				{
					// check if ingredient has unit and amount defined
					if ($post['unit'][$k] > 0 AND ! empty( $post['amount'][$k]) AND $post['ingredient'][$k] > 0)
					{
						// load unit object
						$unit = ORM::factory('Unit', $item);

						// build data to insert
						$data = array(
							'recipe_id' => $recipe->id,
							'ingredient_id' => $post['ingredient'][$k],
							'unit_id' => $post['unit'][$k],
							'amount' => str_replace(' '.__($unit->short), NULL, $post['amount'][$k]),
							'group' => '',
							'note' => $post['note'][$k]
						);
	
						// insert ingredient to relation table
						DB::insert('recipe_ingredient', array_keys($data))
						->values($data)
						->execute();
					}
				}

				// get recipe nutritions
				$nutritions = $recipe->nutritions();
				$recipe->calories = $nutritions['calories'] / $nutritions['weight'] * 100;
				$recipe->protein = $nutritions['protein'] / $nutritions['weight'] * 100;
				$recipe->fat = $nutritions['fat_total'] / $nutritions['weight'] * 100;
				$recipe->carbs = $nutritions['carbohydrate'] / $nutritions['weight'] * 100;
				$recipe->sugars = $nutritions['sugars'] / $nutritions['weight'] * 100;
				$recipe->save();

				// set view success
				$this->view->success = TRUE;

				if ($edit == TRUE OR $this->user->logged_in('admin'))
				{
					HTTP::redirect('/recipe/detail/'.$recipe->id);
				}
			}
			catch (ORM_Validation_Exception $e)
			{
                // set errors using custom messages
                $this->view->errors = $e->errors('is/models');
            }
		}

		// return the recipe OBject
		return $recipe;
	}

	/**
	 * Private search function
	 * 
	 * @return Database_Results
	 */
	public function search($query = array(), $settings = array())
	{
		// initialize ORM recipe
		$items = DB::select(
			'recipe.id',
			'name',
			'preptime',
			'cooktime',
			array(DB::Expr('CONCAT(calories,",",protein,",",fat,",",carbs,",",sugars)'), 'nutritions'),
			'serving_size',
			'tags',
			'user_id'
		)
		->from(array('recipes', 'recipe'));

		// check for recipes in specific categories
		$items = count(Arr::get($query, 'category')) > 0 ? $items->join('recipe_category', 'INNER')
		->on('recipe.id', '=', 'recipe_category.recipe_id')
		->where('recipe_category.category_id', 'IN', DB::expr('('.implode(',', $query['category']).')')) : $items;

		// if search string is defined
		if ( ! empty($query['searchterm']))
		{
			// open and statement
			$items = $items->and_where_open();

			// check where name contains search string
			$items = $items->or_where('name', 'LIKE', '%'.Arr::get($query, 'searchterm').'%');

			// find all ingredients containing name
			$ingredients = DB::select('id')
			->from('ingredients');

			// split by words
			foreach (explode(' ', Arr::get($query, 'searchterm')) as $word)
			{
				// add to ingredients sql builder
				$ingredients = $ingredients->where('name_is', 'LIKE', '%'.$word.'%');
			}

			// execute and return as array
			$ingredients = $ingredients->execute()->as_array(NULL, 'id');

			// check for recipes with specific ingredients
			$items = count($ingredients) > 0 ? $items->join('recipe_ingredient', 'INNER')
			->on('recipe.id', '=', 'recipe_ingredient.recipe_id')
			->or_where('recipe_ingredient.ingredient_id', 'IN', DB::expr('('.implode(',', $ingredients).')')) : $items;

			// close and statement
			$items = $items->and_where_close();
		}

		// check cooktime and preptime ranges
		foreach (array('cooktime', 'preptime') as $range)
		{
			// get range from query
			$range_key = Arr::get($query, $range);

			// check for from range
			if ( ! empty($range_key[0]))
			{
				$items = $items->where($range, '>=', floatval($range_key[0]));
			}

			// check for to range
			if ( ! empty($range_key[1]))
			{
				$items = $items->where($range, '<=', floatval($range_key[1]));
			}
		}

		// get only public items and then limit and order results
		$items = $items->and_where('public', '=', 1)
		->order_by(Arr::get($query, 'order', 'name'), strtoupper(Arr::get($query, 'by', 'ASC')))
		->limit($settings['limit'])
		->offset($settings['offset'])
		->group_by('id')
		->execute(NULL, TRUE);
		
		return $items;
	}

} // End Recipe