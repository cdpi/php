<?php

namespace CDPI;

/**
 * <h1>Loader</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Loader
	{
	public static function loader(string $root):callable
		{
		return function(string $class) use ($root):void
			{
			$file = $root . \DIRECTORY_SEPARATOR . \str_replace('\\', '/', $class) . '.php';

			if (\file_exists($file))
				{
				require_once $file;
				}
			else
				{
				throw new \RuntimeException("Class '$class' not found in '$file'.");
				}
			};
		}

	public static function register(callable $loader):void
		{
		\spl_autoload_register($loader, true);
		}
	}
