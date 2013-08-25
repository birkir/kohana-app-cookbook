<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User Controller
 *
 * @package    Paleo
 * @category   Controller
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Controller_User extends Controller_Template {

	/**
	 * User profile page
	 * 
	 * @return void
	 */
	public function action_profile()
	{

		// setup view
		$this->view = View::factory('user/profile')
		->bind('user', $user)
		->bind('message', $message)
		->bind('errors', $errors)
		->bind('success', $success);

		// bind user
		$user = $this->user->get_user();

		// if posted
		if ($this->request->method() == HTTP_Request::POST)
		{
			// set model values
			$user->values($this->request->post(), array(
				'grocery_day',
				'theme',
				'lang'
			));

			// try validation
			try
			{
				// save orm model
				$user->save();

				// set user language
				I18n::lang($user->lang);

				// set success
				$success = TRUE;
			}
			catch (ORM_Validation_Exception $e)
			{
                // set failure message
                $message = 'There were errors, please see form below.';

                // set errors using custom messages
                $errors = $e->errors('is/models');
			}
		}

		// days
		$this->view->days = array(
			'monday',
			'tuesday',
			'wednesday',
			'thirsday',
			'friday',
			'saturday',
			'sunday'
		);

		// themes
		$this->view->themes = array(
			'cerulean' => 'Cerulean',
			'spruce' => 'Spruce',
			'united' => 'United',
			'cosmo' => 'Cosmo',
			'amelia' => 'Amelia',
			'spacelab' => 'Spacelab',
			'superhero' => 'Superhero',
			'slate' => 'Slate',
			'cyborg' => 'Cyborg'
		);

		// sort themes by key
		ksort($this->view->themes);
	}

	/**
	 * Login page and controller
	 * 
	 * @return void
	 */
	public function action_login()
	{
		// setup login view
		$this->view = View::factory('user/login')
		->bind('message', $message);

		// match http post method
		if ($this->request->method() === HTTP_Request::POST)
		{
			// get post array
			$post = $this->request->post();
	
			// try authentication
			if ( ! $auth = Auth::instance()->login($post['username'], $post['password'], TRUE))
			{
				$message = 'Wrong username or password. Try again.';
			}
			else
			{
				// redirect user to recipe list
				HTTP::redirect('recipe');
			}
		}
	}

	/**
	 * Register page and controller
	 * 
	 * @return void
	 */
	public function action_register()
	{
		// setup view
		$this->view = View::factory('user/register')
		->bind('message', $message)
		->bind('errors', $errors)
		->bind('success', $success);

		// match http post method
		if ($this->request->method() == HTTP_Request::POST)
		{
			// create_user function
			$user = ORM::factory('User')->values($this->request->post(), array(
				'username',
				'email',
				'password'
			));

			try
			{
				// try saving model
				$user = $user->save();

				// add roles
				$user->add('roles', ORM::factory('Role', array(
					'name' => 'login'
				)));

				// set success message
				$message = View::factory('user/register-complete');
				$success = TRUE;
			}
			catch (ORM_Validation_Exception $e)
			{
                // set failure message
                $message = 'There were errors, please see form below.';

                // set errors using custom messages
                $errors = $e->errors('is/models');
            }
		}
	}

	/**
	 * Logout controller
	 * 
	 * @return void
	 */
	public function action_logout()
	{
		// log user out
		Auth::instance()->logout();

		// redirect to login
		HTTP::redirect('user/login');
	}

	/**
	 * Lost password and controller
	 * 
	 * @return void
	 */
	public function action_lost_password()
	{
		$this->view = View::factory('user/lostpassword');
	}

} // End User