<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public function action_index()
	{
		$this->view = View::factory('menu/list')
		->bind('items', $items);

		$items = ORM::factory('Menu')
		->where('public', '=', 1)
		->order_by('views', 'DESC')
		->find_all();
	}

	public function action_detail()
	{
		$when = time();

		$first_day = date('U', mktime(0, 0, 0, date('m', $when), 1, date('Y', $when)));

		$this->view = View::factory('menu/calendar');

		$this->view->calendar = array(
			'when' => $when,
			'days_in_month' => date('t', $when),
			'first_day_of_month' => date('N', $first_day),
			'year' => date('Y', $when),
			'month' => date('m', $when),
			'day' => date('d', $when)
		);

		$this->view->item = ORM::factory('Menu', $this->request->param('id'));
		$this->view->recipes = array();

		// increment views
		$this->view->item->views++;
		$this->view->item->save();

		$recipes = $this->view->item->recipes
		->select(array('menu_recipe.date', 'date'))
		->select(array('menu_recipe.serves', 'serving'))
		->find_all();

		foreach ($recipes as $recipe)
		{
			$this->view->recipes[$recipe->date] = $recipe;
		}
	}

	public function action_grocerylist()
	{
		$menu = ORM::factory('Menu', $this->request->param('id'));

		$list = array();

		$recipes = $menu->recipes
		->select(array('menu_recipe.date', 'date'))
		->select(array('menu_recipe.serves', 'serving'))
		->find_all();

		foreach ($recipes as $recipe)
		{
			$ingredients = $recipe->ingredients
			->select(array('recipe_ingredient.amount', 'amount'))
			->select(array('recipe_ingredient.unit_id', 'unit'))
			->find_all();

			foreach ($ingredients as $item)
			{
				$unit = ORM::factory('Unit', $item->unit);

				if ( ! isset($list[$item->name])) {
					$list[$item->name] = array();
				}

				$list[$item->name][] = array('unit' => $unit->short, 'amount' => $item->amount);
			}
		}

		$this->view = View::factory('menu/grocerylist')
		->set('items', $list);
	}


	public function convert($ingredient = NULL, $unit_from = NULL, $unit_to = NULL)
	{
		return $ingredient->amount;
	}


} // End Menu