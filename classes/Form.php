<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Form extended helper class.
 *
 * @package    Paleo
 * @category   Helpers
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class Form extends Kohana_Form {

	/**
	 * Check for value in object, array, post or get.
	 *
	 * @param  mixed  Object or array
	 * @param  string Field name
	 * @return string
	 */
	public static function value($item, $field = NULL)
	{
		// check if item is object
		if (($item instanceof Kohana_ORM AND $item->loaded()) OR is_object($item) AND isset($item->{$field}))
		{
			// return object's field
			return $item->{$field};
		}
		else if (is_array($item) AND isset($item[$field]))
		{
			// return array's field
			return $item[$field];
		}
		else
		{
			// get initial request
			$request = Request::initial();

			// check for request method
			if ($request->method() == HTTP_Request::POST)
			{
				// return post field
				return $request->post($field, NULL);
			}
			else if ($request->method() == HTTP_Request::GET)
			{
				// return get field
				return $request->query($field);
			}
		}

		// return null by default
		return NULL;
	}

	/**
	 * Check if item has error
	 *
	 * @param  mixed   Object or array
	 * @param  string  Field name
	 * @return boolean
	 */
	public static function has_error($item, $field = NULL)
	{
		// return if available
		return (is_array($item) AND isset($item[$field])) ? ' error' : NULL;
	}

	/**
	 * Check if item has error
	 *
	 * @param  mixed   Object or array
	 * @param  string  Field name
	 * @return boolean
	 */
	public static function helper($item, $field = NULL)
	{
		// return if available
		return (is_array($item) AND isset($item[$field])) ? '<span class="help-block">'.$item[$field].'</span>' : NULL;
	}

} // End Form