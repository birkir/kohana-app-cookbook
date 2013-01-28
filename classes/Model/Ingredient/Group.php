<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Ingredient Group ORM Model
 *
 * @package    Paleo
 * @category   Model
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Model_Ingredient_Group extends ORM {

	/**
	 * Has-many relationships for model
	 * @var array
	 */
	protected $_has_many = array(
		'subgroup' => array(
			'model'       => 'Ingredient_Group',
			'foreign_key' => 'parent_id',
			'far_key'     => 'id'
		)
	);

} // End Ingredient Group