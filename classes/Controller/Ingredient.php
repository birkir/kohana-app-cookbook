<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Ingredient Controller
 *
 * @package    Cookbook
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Ingredient extends Controller_Template {

	/**
	 * @var array Nutrition fields
	 */
	public $num_fields = [
		'calories'      => 'Calories',
		'fat_total'     => 'Total Fat',
		'fat_saturated' => 'Saturated Fat',
		'fat_trans'     => 'Trans Fat',
		'cholestrol'    => 'Cholestrol',
		'sodium'        => 'Sodium',
		'carbohydrate'  => 'Total Carbohydrate',
		'dietary_fiber' => 'Dietary Fiber',
		'sugars'        => 'Sugars',
		'protein'       => 'Protein',
		'vitamin_a'     => 'Vitamin A',
		'vitamin_c'     => 'Vitamin C',
		'calcium'       => 'Calcium',
		'iron'          => 'Iron',
		'multiplier'    => 'Grams in 1 cup',
		'piece_100g'    => 'Amount (piece, default)'
	];

	/**
	 * List ingredients
	 *
	 * @return void
	 */
	public function action_Index()
	{
		// Setup view and bind items
		$this->view = View::factory('Ingredient/List')
		->bind('items', $items);

		// List items from ORM
		$items = ORM::factory('Ingredient')
		->order_by('name', 'ASC')
		->find_all();

		// Serve JSON on ajax request
		$this->json(function () {
			return DB::select('id', ['name_is', 'name'])
			->from('ingredients')
			->order_by('name', 'ASC')
			->execute()
			->as_array();
		});
	}

	/**
	 * Search ingredients
	 *
	 * @return void
	 */
	public function action_search()
	{
		$this->json(function () {

			// get query from query string
			$q = $this->request->query('query');

			// find items that match
			return ORM::factory('Ingredient')
			->where('name', 'LIKE', '%'.$q.'%')
			->or_where('name_is', 'LIKE', '%'.$q.'%')
			->find_all()
			->as_array('id', 'name_is');
		});
	}

	/**
	 * Create ingredient
	 *
	 * @return void
	 */
	public function action_Create()
	{
		$this->view = View::factory('Ingredient/Fieldset')
		->bind('form', $form)
		->set('num_fields', $this->num_fields);

		// ORM Model to attach to Form
		$item = ORM::factory('Ingredient');

		// Load all groups
		$this->view->groups = ORM::factory('Ingredient_Group')
		->order_by('id', 'ASC')
		->where('parent_id', 'IS', NULL)
		->find_all();

		// Setup Form
		$form = Form::factory($item);

		// Process HTTP Request
		if ($this->request->method() === HTTP_Request::POST)
		{
			// Attach POST data values to Model
			$item->values($this->request->post());

			try
			{
				$item->save();
				HTTP::redirect('/Ingredient/Edit/'.$item->id);
			}
			catch (ORM_Validation_Exception $e) {}
		}
	}

	/**
	 * Edit ingredient
	 *
	 * @return void
	 */
	public function action_Edit()
	{
		$this->view = View::factory('Ingredient/Fieldset')
		->bind('form', $form)
		->set('num_fields', $this->num_fields);

		// ORM Model to attach to Form
		$item = ORM::factory('Ingredient', $this->request->param('id'));

		// Throw 404 on not found
		if ( ! $item->loaded())
			throw new HTTP_Exception_404();

		// Load all groups
		$this->view->groups = ORM::factory('Ingredient_Group')
		->order_by('id', 'ASC')
		->where('parent_id', 'IS', NULL)
		->find_all();

		// Setup Form
		$form = Form::factory($item);

		// Process HTTP Request
		if ($this->request->method() === HTTP_Request::POST)
		{
			// Attach POST data values to Model
			$item->values($this->request->post());

			try
			{
				$item->save();
			}
			catch (ORM_Validation_Exception $e) {}
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
