<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Recipe ORM Model
 *
 * @package    Paleo
 * @category   Model
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Model_Recipe extends ORM {

	/**
	 * Has-many relationships for model
	 * @var array
	 */
	protected $_has_many = array(
	    'ingredients' => array(
	        'model'   => 'Ingredient',
	        'through' => 'recipe_ingredient',
	    ),
	    'categories' => array(
	    	'model'   => 'Category',
	    	'through' => 'recipe_category'
	    )
	);

	/**
	 * Convert float to fraction
	 *
	 * @param  float  Number to convert
	 * @return string
	 */
	public static function to_fraction($num = 0)
	{
		// remove decimals from number
		$x = $num - floor($num);

		// punctate decimals
		if ($x > 0.11) $punc = '⅛';
		if ($x > 0.24) $punc = '¼';
		if ($x > 0.32) $punc = '⅓';
		if ($x > 0.36) $punc = '⅜';
		if ($x > 0.49) $punc = '½';
		if ($x > 0.61) $punc = '⅝';
		if ($x > 0.66) $punc = '⅔';
		if ($x > 0.74) $punc = '¾';
		if ($x > 0.86) $punc = '⅞';

		// return number with punctation
		return (floor($num) > 0 ? floor($num) : NULL) . (isset($punc) ? $punc : NULL);
	}

	/**
	 * Calculate recipe nutrition table
	 *
	 * @return array
	 */
	public function nutritions()
	{
		// get ingredients for recipe
		$ingredients = $this->all_ingredients();

		// base nutrition table
		$n = array(
			'calories' => (float) 0,
			'fat_total' => (float) 0,
			'fat_saturated' => (float) 0,
			'fat_trans' => (float) 0,
			'cholestrol' => (float) 0,
			'sodium' => (float) 0,
			'carbohydrate' => (float) 0,
			'dietary_fiber' => (float) 0,
			'sugars' => (float) 0,
			'protein' => (float) 0,
			'vitamin_a' => (float) 0,
			'vitamin_c' => (float) 0,
			'calcium' => (float) 0,
			'iron' => (float) 0,
			'weight' => (float) 0
		);

		// loop through ingredients
		foreach ($ingredients as $item)
		{
			// get ingredient weight
			$weight = $item->weight($item->amount, $item->unit);

			// loop through nutritions
			foreach ($n as $nutrition => $amt)
			{
				// set nutrition or weight
				$n[$nutrition] += ($nutrition === 'weight' ? $weight : $item->{$nutrition} * $weight / 100);
			}
		}

		// return nutrition sum as array
		return $n;
	}

	/**
	 * Get all recipe ingredients
	 *
	 * @return Database_Result
	 */
	public function all_ingredients()
	{
		return $this->ingredients
		->select(array('recipe_ingredient.group', 'group'))
		->select(array('recipe_ingredient.amount', 'amount'))
		->select(array('recipe_ingredient.note', 'note'))
		->select(array('recipe_ingredient.unit_id', 'unit'))
		->order_by('recipe_ingredient.id', 'ASC')
		->find_all();
	}
} // End Recipe