<?php

namespace CDPI;

use function \microtime, \sprintf;

//echo hrtime(true), PHP_EOL;
//print_r(hrtime());

/**
 * <h1>Benchmark</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Benchmark
	{
	/**
	 * @since 0.1.0
	 */
	public function print(string $name, float $time, int $n = 100000):void
		{
		echo sprintf('<p>%s: %dx en %d secondes, moyenne: %d</p>', $name, $n, $time, $time / ($n * 1.0));
		}

	/**
	 * @since 0.1.0
	 */
	public function run(callable $code, int $n = 100000):float
		{
		$start = microtime(true);

		for ($i = 0; $i < $n; $i++)
			{
			$code();
			}

		$end = microtime(true);

		return $end - $start;
		}

	/*
	public function __invoke(callable $code, int $n = 100000):float
		{
		}
	*/
	}
