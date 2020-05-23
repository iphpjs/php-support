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

use Illuminate\Support\Traits\ForwardsCalls;

trait Call
{
	use ForwardsCalls;

	/**
	 * Handle dynamic method calls into the model.
	 *
	 * @param string $method
	 * @param array $parameters
	 * @return mixed
	 */
	public function __call($method, $parameters)
	{
		return $this->forwardCallTo(new static, $method, $parameters);
	}
}

