<?php

namespace Monk;

// TODO: register_shutdown_function Pas affecté par max_execution_time :-) tester si script infini possible

/**
 * <h1>WebSite</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class WebSite
	{
	/**
	 * @since 0.1.0
	 */
	public function __construct()
		{
		}

	/**
	 * @since 0.1.0
	 */
	public final function __invoke():void
		{
		throw new \RuntimeException('WebSite::__invoke()');

		/*
		$request = new Request();

		if ($request->isGET())
			{
			echo 'GET';
			}
		*/
		}
	}
