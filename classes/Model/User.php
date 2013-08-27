<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User ORM Model
 *
 * @package    Cookbook
 * @category   Model
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Model_User extends Model_Auth_User {

	public function rules()
	{
		$rules = parent::rules();

		$rules['password'] = [
			['not_empty'],
			['min_length', [':field', 6]]
		];

		return $rules;
	}

} // End User