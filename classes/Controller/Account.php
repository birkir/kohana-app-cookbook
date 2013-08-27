<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Account Controller
 *
 * @package    Cookbook
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_Account extends Controller_Template {

	/**
	 * Account profile page
	 * 
	 * @return void
	 */
	public function action_Profile()
	{
		// Setup view
		$this->view = View::factory('Account/Profile')
		->bind('form', $form)
		->set('days', ['monday', 'tuesday', 'wednesday', 'thirsday', 'friday', 'saturday', 'sunday']);

		// Bind user
		$item = $this->user->get_user();

		// Setup form
		$form = Form::factory($item);

		// Process HTTP Request
		if ($this->request->method() === HTTP_Request::POST)
		{
			// Attach POST data values to Model
			$item->values($this->request->post(), ['lang', 'grocery_day']);

			// Try saving model and set language
			try
			{
				$item->save();

				I18n::lang($item->lang);
			}
			catch (ORM_Validation_Exception $e)
			{
				// Display something custom ...
			}
		}
	}

	/**
	 * Login page and controller
	 * 
	 * @return void
	 */
	public function action_Login()
	{
		// setup login view
		$this->view = View::factory('Account/Login')
		->bind('message', $message);

		// match http post method
		if ($this->request->method() === HTTP_Request::POST)
		{
			// get post array
			$post = $this->request->post();
	
			// try authentication
			if ( ! $auth = Auth::instance()->login($post['username'], $post['password'], isset($post['remember'])))
			{
				$message = 'Wrong username or password. Try again.';
			}
			else
			{
				// redirect user to recipe list
				HTTP::redirect('Recipe');
			}
		}
	}

	/**
	 * Register page and controller
	 * 
	 * @return void
	 */
	public function action_Register()
	{
		// Setup fieldset view
		$this->view = View::factory('Account/Register')
		->bind('form', $form);

		// ORM Model to attach to Form
		$item = ORM::factory('User');

		// Create extra rules for users
		$extra_rules = Validation::factory($this->request->post())
		->rule('password', 'not_empty')
		->rule('password', 'min_length', [':value', 6])
		->rule('password_confirm', 'matches', [
			':validation', ':field', 'password'
		]);

		// Setup Form
		$form = Form::factory($item, $extra_rules);

		// Process HTTP Request
		if ($this->request->method() === HTTP_Request::POST)
		{
			// Attach POST data values to Model
			$item->values($this->request->post(), ['username', 'email', 'password']);

			// Try saving model and add role to it
			try
			{
				$item->save($extra_rules);
				$item->add('roles', ORM::factory('Role', ['name' => 'login']));

			}
			catch (ORM_Validation_Exception $e)
			{
				// Display something custom ...
			}
		}
	}

	/**
	 * Logout controller
	 * 
	 * @return void
	 */
	public function action_Logout()
	{
		// log user out
		Auth::instance()->logout();

		// redirect to login
		HTTP::redirect('Account/Login');
	}

	/**
	 * Lost password controller
	 * 
	 * @return void
	 */
	public function action_LostPassword()
	{
		$this->view = View::factory('Account/LostPassword');
	}

} // End Account