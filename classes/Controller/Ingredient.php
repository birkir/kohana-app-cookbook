<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Ingredient Controller
 *
 * @package    Paleo
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Ingredient extends Controller_Template {

	/**
	 * Nutrition fields
	 * @var array
	 */
	public $num_fields = array(
		'calories' => 'Calories',
		'fat_total' => 'Total Fat',
		'fat_saturated' => 'Saturated Fat',
		'fat_trans' => 'Trans Fat',
		'cholestrol' => 'Cholestrol',
		'sodium' => 'Sodium',
		'carbohydrate' => 'Total Carbohydrate',
		'dietary_fiber' => 'Dietary Fiber',
		'sugars' => 'Sugars',
		'protein' => 'Protein',
		'vitamin_a' => 'Vitamin A',
		'vitamin_c' => 'Vitamin C',
		'calcium' => 'Calcium',
		'iron' => 'Iron',
		'multiplier' => 'Grams in 1 cup',
		'piece_100g' => 'Amount (piece, default)'
	);

	/**
	 * List ingredients
	 *
	 * @return void
	 */
	public function action_index()
	{
		// list ingredients by name
		$this->view = View::factory('ingredient/list')
		->set('items', ORM::factory('Ingredient')
		->order_by('name', 'ASC')
		->find_all());

		// serve ajax request
		if ($this->request->is_ajax())
		{
			// disable template auto render
			$this->auto_render = FALSE;

			// return all items
			$this->response->body(json_encode(DB::select('id', array('name_is', 'name'))->from('ingredients')
			->order_by('name', 'ASC')->execute()->as_array()));
		}
	}

	/**
	 * Search ingredients
	 *
	 * @return void
	 */
	public function action_search()
	{
		$this->auto_render = FALSE;

		$query = UTF8::strtolower($_GET['query']);

		$items = ORM::factory('Ingredient')
		->find_all();

		$response = array();

		foreach ($items as $item)
		{
			if (strpos($item->name, $query) !== FALSE OR strpos($item->name_is, $query) !== FALSE)
			{
				$response[] = array('id' => $item->id, 'name' => $item->name_is);
			}
		}

		$this->response->body(json_encode($response));
	}

	/**
	 * Create ingredient
	 *
	 * @return void
	 */
	public function action_create()
	{
		// setup fieldset view
		$this->view = View::factory('ingredient/fieldset')
		->bind('errors', $errors)
		->bind('item', $ingredient)
		->set('num_fields', $this->num_fields);

		// set orm as loader
		$ingredient = ORM::factory('Ingredient');

		$this->view->groups = ORM::factory('Ingredient_Group')
		->order_by('id', 'ASC')
		->where('parent_id', 'IS', NULL)
		->find_all();

		// check for post
		if ($this->request->method() == HTTP_Request::POST)
		{
			try
			{
				$ingredient = ORM::factory('Ingredient')
				->values($this->request->post())
				->save();
				
				HTTP::redirect('/ingredient/edit/'.$ingredient->id);
			}
			catch (ORM_Validation_Exception $e)
			{
                // set errors using custom messages
                $errors = $e->errors('is/models');
            }
            
		}
	}

	/**
	 * Edit ingredient
	 *
	 * @return void
	 */
	public function action_edit()
	{
		// setup fieldset view
		$this->view = View::factory('ingredient/fieldset')
		->bind('item', $ingredient)
		->bind('errors', $errors)
		->set('num_fields', $this->num_fields);


		$this->view->groups = ORM::factory('Ingredient_Group')
		->order_by('id', 'ASC')
		->where('parent_id', 'IS', NULL)
		->find_all();

		// load item by id
		$ingredient = ORM::factory('Ingredient', $this->request->param('id'));

		// check if item found
		if ( ! $ingredient->loaded())
			throw new HTTP_Exception_404('Ingredient not found');

		// check for post
		if ($this->request->method() == HTTP_Request::POST)
		{
			try
			{
				$ingredient = $ingredient
				->values($this->request->post())
				->save();
			}
			catch (ORM_Validation_Exception $e)
			{
                // set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	}

	public function action_fs_search()
	{
		$this->auto_render = FALSE;

		$fs = Kohana::$config->load('fatsecret');

		$request = FatSecret::instance($fs->secret, $fs->key)
		->foods_search($_GET['query']);

		$this->response->body(json_encode($request));
	}

	public function action_fs_get()
	{
		$this->auto_render = FALSE;

		$fs = Kohana::$config->load('fatsecret');

		$request = FatSecret::instance($fs->secret, $fs->key)
		->food_get($this->request->param('id'));

		$this->response->body(json_encode($request));
	}

} // End Ingredient
