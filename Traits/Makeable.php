<?php

/*
 * This file is part of the Iphpjs package.
 *
 * (c) NetworkRanger <admin@iphpjs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iphpjs\Support\Traits;

trait Makeable
{
	public static function make(...$args)
	{
		return new static(...$args);
	}
}
