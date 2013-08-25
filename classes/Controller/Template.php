<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Template Controller
 *
 * @package    Paleo
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Template extends Controller {

	/**
	 * View property
	 * @var View
	 */
	public $view;

	/**
	 * User property
	 * @var Auth
	 */
	public $user;

	/**
	 * Template name
	 * @var string
	 */
	public $template = 'template';

	/**
	 * Auto render template
	 * @var boolean
	 */
	public $auto_render = TRUE;

	/**
	 * jQuery UI toggle
	 * @var boolean
	 */
	public $jqueryui = TRUE;

	/**
	 * Overwrite controller's before function
	 *
	 * @return void
	 */
	public function before()
	{
		// get parent before
		parent::before();

		// create template
		$this->template = View::factory($this->template);

		// setup user
		$this->user = Auth::instance();

		// check if user is logged in
		if ($this->user->logged_in())
		{
			// set user language
			I18n::lang($this->user->get_user()->lang);
		}

		// allow global usage of user
		View::set_global('user', $this->user);
	}

	/**
	 * Overwrite controller's after function
	 *
	 * @return void
	 */
	public function after()
	{
		// get parent after
		parent::after();

		// setup template view
		$this->template->view = $this->view;

		// set jquery ui
		$this->template->jqueryui = $this->jqueryui;

		// if auto render
		if ($this->auto_render === TRUE)
		{
			// render template and subviews to response
			$this->response->body($this->template->render());
		}
	}
} // End Template