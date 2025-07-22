<?php

namespace Monk;

use function \array_merge as merge, \array_reduce as reduce, \floatval as toFloat;

use function \arsort, \explode, \list, \trim;

//	Authorization

/**
 * <h1>Header</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait Header
	{
	/**
	 * @since 0.1.0
	 */
	public function parseHeader(string $header):array
		{
		$elements = explode(',', $header);

		$elements = reduce($elements, [$this, 'parseElement'], []);

		arsort($elements);

		return $elements;
		}

	/**
	 * @since 0.1.0
	 */
	private function parseElement(array $result, string $element):array
		{
		$parts = explode(';q=', $element);

		list($key, $q) = merge($parts, [1]);

		$result[trim($key)] = toFloat($q);

		return $result;
		}
	}
