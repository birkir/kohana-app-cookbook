<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Category ORM Model
 *
 * @package    Paleo
 * @category   Model
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Model_Category extends ORM {

	/**
	 * Has-many relationships for model
	 * @var array
	 */
	protected $_has_many = array(
		'recipes' => array(
			'model'   => 'Recipe',
			'through' => 'recipe_category'
		)
	);

} // End Category