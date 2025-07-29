<?php

namespace CDPI\Database;

use \PDO;

/**
 * <h1>QueryInto</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait QueryInto
	{
	/**
	 * @since 0.1.0
	 */
	public function select():void
		{
		}

	/**
	 * @since 0.1.0
	 */
	public function queryInto(string $sql, array $parameters, object $instance):void
		{
		$statement = $this->pdo->prepare($sql);

		$statement->setFetchMode(PDO::FETCH_INTO, $instance);

		$statement->execute($parameters);

		$statement->fetch();
		}

	/**
	 * @since 0.1.0
	 */
	public function queryAllInto(string $sql, object $instance, callable $callback):void
		{
		$statement = $this->pdo->query($sql);

		$statement->setFetchMode(PDO::FETCH_INTO, $instance);

		foreach ($statement as $record)
			{
			$callback();
			}
		}
	}
