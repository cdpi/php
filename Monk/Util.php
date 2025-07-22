<?php

namespace Monk;

use function \strcasecmp;

/**
 * <h1>Util</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Util
	{
	/**
	 * @since 0.1.0
	 */
	public static final function equals(string $string1, string $string2):bool
		{
		return strcasecmp($string1, $string2) === 0;
		}
	}
