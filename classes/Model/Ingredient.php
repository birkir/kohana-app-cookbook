<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Ingredient ORM Model
 *
 * @package    Paleo
 * @category   Model
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Model_Ingredient extends ORM {

	/**
	 * Has-many relationships for model
	 * @var array
	 */
	protected $_has_many = array(
	    'recipes' => array(
	        'model'   => 'Recipe',
	        'through' => 'recipe_ingredient',
	    ),
	);

	/**
	 * Belongs-to relationships for model
	 * @var array
	 */
	protected $_belongs_to = array(
		'group' => array(
			'model' => 'Ingredient_Group'
		)
	);

	/**
	 * Rule definitions for validating model
	 *
	 * @return array
	 */
	public function rules()
	{
		// base rules
		$rules = array(
		    'name' => array(
		        array('not_empty'),
		        array(array($this, 'name_unique')),
		    ),
		    'unit_id' => array(
		    	array('digit')
		    )
		);

		// decimal fields
		$decimals = array(
			'calories',
			'fat_total',
			'fat_saturated',
			'fat_trans',
			'cholestrol',
			'sodium',
			'carbohydrate',
			'dietary_fiber',
			'sugars',
			'protein',
			'vitamin_a',
			'vitamin_c',
			'calcium',
			'iron',
			'multiplier',
			'piece_100g'
		);

		// loop through decimal fields
		foreach ($decimals as $decimal)
		{
			// add numeric rule
			$rules[$decimal] = array(array('numeric'));
		}

		// return rule array
		return $rules;
	}

	/**
	 * Name has to be unique for ingredient
	 *
	 * @param  string  Ingredient name
	 * @return boolean
	 */
	public function name_unique($name = NULL)
    {
    	// check if ORM object is loaded and updating value
    	if ($this->loaded() AND $this->name == $name)
    		return true;

		// check for ingredients with same name
        return ! ORM::factory('Ingredient', array('name' => $name))->loaded();
    }

	/**
	 * Weight calculation for ingredient
	 *
	 * @param  float  Amount of ingredient
	 * @param  int    Unit ID 
	 * @return float
	 */
    public function weight($amount = 0.0, $unit_id = 0)
    {
    	// set grams to amount
		$grams = $amount;

		// check if unit is piece
		if ($unit_id == 12)
		{
			// multiply amount to grams in piece
			$grams = $amount * $this->piece_100g;
		}
		else
		{
			// load unit
			$unit = ORM::factory('Unit', $unit_id);

			if ($unit->to_ml > 0)
			{
				// convert mls to cup to grams
				$grams = $amount / $unit->to_ml * 0.00422675 * $this->multiplier;
			}
			else if ($unit->to_cup > 0)
			{
				// convert cup to grams
				$grams = $amount / $unit->to_cup * $this->multiplier;
			}
			else if ($unit->to_grams > 0)
			{
				// convert unit to grams
				$grams = $amount / $unit->to_grams;
			}
		}

		// return calculated sum
		return $grams;
    }

	/**
	 * Find all ingredients with columns in relation table
	 *
	 * @return Database_Result
	 */
	public function recipe_find_all()
	{
		return $this
		->select(array('recipe_ingredient.group', 'group'))
		->select(array('recipe_ingredient.amount', 'amount'))
		->select(array('recipe_ingredient.note', 'note'))
		->select(array('recipe_ingredient.unit_id', 'unit'))
		->order_by('group', 'ASC')
		->order_by('id', 'ASC')
		->find_all();
	}

} // End Ingredient