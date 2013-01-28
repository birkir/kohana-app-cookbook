<?php defined('SYSPATH') or die('No direct script access.');
/**
 * FatSecret API
 *
 * @package    Paleo
 * @category   Vendor
 * @author     Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @copyright  (c) 2012 Birkir Gudjonsson
 * @licence    http://kohanaframework.org/licence
 */
class FatSecret {

	protected $_methods = array(
		'food.get',
		'foods.search',
		'recipe.get',
		'recipes.search',
		'recipe_types.get',
		'profile.create',
		'profile.get',
		'profile.get_auth',
		'profile.request_script_session_key',
		'exercises.get',
		'food_entries.copy',
		'food_entries.get',
		'food_entries.get_month',
		'food_entry.create',
		'food_entry.delete',
		'food_entry.edit',
		'weight.update',
		'weights.get_month'
	);

	public static function instance($secret = NULL, $key = NULL)
	{
		return new FatSecret($secret, $key);
	}

	public function __construct($secret, $key)
	{
		$this->_secret = $secret;
		$this->_key = $key;

		return $this;
	}

	public function request($method = NULL, $params = array())
	{
		// base url
		$url = 'http://platform.fatsecret.com/rest/server.api';

		// root params combined with user defined params
		$params = Arr::merge(array(
			'format' => 'json',
			'method' => $method,
			'oauth_consumer_key' => $this->_key,
			'oauth_nonce' => '123',
			'oauth_signature_method' => 'HMAC-SHA1',
			'oauth_timestamp' => time(),
			'oauth_version' => '1.0',
		), $params);

		// sort by keys asc
		ksort($params);

		// create urlencoded path
		$base = rawurlencode('GET').'&'.rawurlencode($url).'&'.rawurlencode(http_build_query($params));

		// create signature
		$sig = base64_encode(hash_hmac('sha1', $base, $this->_secret.'&', true));

		// append to url
		$url .= '?'.http_build_query($params).'&oauth_signature='.rawurlencode($sig);

		// make request
		$request = file_get_contents($url);

		return json_decode($request);
	}

	public function foods_search($query = NULL)
	{
		$request = $this->request('foods.search', array(
			'search_expression' => $query,
			'max_results' => 8
		));

		return isset($request->foods) ? $request->foods->food : array();
	}

	public function food_get($food_id = 0)
	{
		$request = $this->request('food.get', array(
			'food_id' => $food_id
		));

		return $request;
	}

}