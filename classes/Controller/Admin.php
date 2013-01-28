<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

	public function before()
	{
		parent::before();

		if ( ! $this->user->logged_in('admin'))
			throw new Kohana_Exception('Not authorized');
	}

	public function action_index()
	{
		// Tools
		$this->view = View::factory('admin/index');
	}

}