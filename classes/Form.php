<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Form extended helper class.
 *
 * @package    Cookbook
 * @category   Helpers
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Form extends Kohana_Form {

	public $message_success = 'The form has been submitted.';

	public $message_errors = 'We found some errors while processing the form, please correct them below.';

	protected $_errors = [];

	/**
	 * Allow to initialize Form class with some kind of model.
	 * 
	 * @param  mixed ORM or Array
	 * @return Form
	 */
	public static function factory($model = NULL, $extra_validation = NULL)
	{
		return new Form($model, $extra_validation);
	}

	/**
	 * Create construct to interact with model
	 *
	 * @param  mixed ORM or Array
	 * @return void
	 */
	public function __construct($model, $extra_validation)
	{
		$this->model = $model;

		$this->extra_validation = $extra_validation;

		return $this;
	}

	public function __toString()
	{
		if ($this->model instanceof ORM)
		{
			if (count($this->model->changed()) > 0)
			{
				try
				{
					$this->model->check($this->extra_validation ? $this->extra_validation : NULL);
				}
				catch (ORM_Validation_Exception $e)
				{
					$this->_errors = $e->errors('models/'.$this->model->object_name(), TRUE);
				}
			}

			if (count($this->_errors) > 0)
				return '<div'.HTML::attributes(['class' => 'alert alert-danger']).'>'.__($this->message_errors).'</div>';

			if ($this->model->saved())
				return '<div'.HTML::attributes(['class' => 'alert alert-success']).'>'.__($this->message_success).'</div>';
		}


		return '';
	}

	public function value($name = NULL)
	{
		if ($request = Request::current() AND $request->method() === HTTP_Request::POST)
		{
			return Arr::get($request->post(), $name);
		}
		else if ($this->model->loaded())
		{
			return $this->model->{$name};
		}

		return '';
	}

	public function has($name = NULL)
	{
		if (Arr::path($this->_errors, '_external.'.$name, FALSE) OR Arr::path($this->_errors, $name, FALSE))
			return ' has-error';

		return NULL;
	}

	public function helper($name)
	{
		if ($message = Arr::path($this->_errors, $name, FALSE)) { }
		else if ($message = Arr::path($this->_errors, '_external.'.$name, FALSE)) { }

		if (isset($message) AND $message)
			return '<span'.HTML::attributes(['class' => 'help-block']).'>'.(is_string($message) ? $message : 'unknown_error').'</span>';

		return NULL;
	}

} // End Form