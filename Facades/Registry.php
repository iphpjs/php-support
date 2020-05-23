<?php

/*
 * This file is part of the Iphpjs package.
 *
 * (c) NetworkRanger <admin@iphpjs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iphpjs\Support\Facades;

/**
 * Registry DesignPattern Helper
 *
 * Class Registry
 *
 * @package Iphpjs\Support\Facades
 */
class Registry
{
	/**
	 * The data used to save variables
	 *
	 * @var array
	 */
	private static array $data = [];

	/**
	 * set a key or keys to data
	 *
	 * @param array|string $key
	 * @param mixed $value
	 */
	public static function set($key, $value = null)
	{
		// If the column is an array, we will assume it is an array of key-value pairs
		// and can add them each as a set clause.
		is_array($key) and self::setKeys($key);

		is_scalar($key) and self::$data[$key] = $value;
	}


	/**
	 * destory a key or keys from data
	 *
	 * @param array|string $key
	 */
	public static function destory($key)
	{
		is_array($key) and self::destroyKeys($key);

		if(is_scalar($key)) unset(self::$data[$key]);
	}

	/**
	 * get a key , keys or all data from data
	 *
	 * @param $key
	 * @return array|mixed|null
	 */
	public static function get($key)
	{
		if(is_null($key)) return self::$data;
		if(is_array($key)) return self::getKeys($key);

		return self::$data[$key] ?? null;
	}

	/**
	 * set keys to data
	 *
	 * @param array $keys
	 */
	public static function setKeys(array $keys)
	{
		foreach ($keys as $key => $value) {
			self::set($key, $value);
		}
	}

	/**
	 * destory keys from data
	 *
	 * @param array $keys
	 */
	public static function destroyKeys(array $keys)
	{
		foreach ($keys as $key) {
			self::destory($key);
		}
	}

	/**
	 * get keys from data
	 *
	 * @param array $keys
	 * @return mixed
	 */
	public static function getKeys(array $keys)
	{
		return array_intersect_key(self::$data, array_flip((array) $keys));
	}
}
