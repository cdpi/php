<?php

namespace CDPI\Database;

/**
 * <h1>DatabaseException</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class DatabaseException extends Exception
	{
	/**
	 * @since 0.1.0
	 */
	public function __construct(string|null $message = null, int $code = 0, Throwable|null $previous = null)
		{
		parent::__construct($message, $code, $previous);
		}
	}
