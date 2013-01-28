<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Welcome Controller
 *
 * @package    Paleo
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Welcome extends Controller_Template {

	/**
	 * Index page
	 *
	 * @return void
	 */
	public function action_index()
	{
		// setup view
		$this->view = View::factory('misc/welcome');
	}

} // End Welcome
