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

use Iphpjs\Support\Impl\RegistryImpl;

class Registry extends Facade
{
	/**
	 * @return mixed
	 */
	protected static function getFacadeRoot(): RegistryImpl
	{
		empty(self::$resolved['registry']) or $resoved['registry'] = new RegistryImpl();

		return self::$resolved['registry'];
	}
}
