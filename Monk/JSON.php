<?php

namespace Monk;

//use const \JSON_BIGINT_AS_STRING, \JSON_THROW_ON_ERROR;
//use function \json_decode;

/**
 * <h1>JSON</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait JSON
	{
	public static function decode(string $json):array
		{
		return \json_decode($json, true, 512, \JSON_BIGINT_AS_STRING | \JSON_THROW_ON_ERROR);
		}
	}
