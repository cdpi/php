<?php

namespace CDPI\Database;

use \PDO;

use function \call_user_func;

/**
 * <h1>AbstractDatabase</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
abstract class AbstractDatabase
	{
	use QueryInto;

	protected PDO $pdo;

	/*
	public function __construct()
		{
		//$this->pdo = new PDO(sprintf('sqlite:%s', $path));
		//$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	*/

	/**
	 * @since 0.1.0
	 */
	public final function execute(string $sql, array $parameters):int
		{
		$statement = $this->pdo->prepare($sql);

		$statement->execute($parameters);

		return $statement->rowCount();
		}

	/**
	 * @since 0.1.0
	 */
	public final function queryAll(string $sql):array
		{
		$statement = $this->pdo->query($sql, PDO::FETCH_ASSOC);

		return $statement->fetchAll();
		}

	/**
	 * @since 0.1.0
	 */
	public final function transaction(callable $callback):mixed
		{
		try
			{
			// TODO: Tester si OK
			$this->pdo->beginTransaction();

			//$result = call_user_func($callback, $this);
			$result = call_user_func($callback);

			// TODO: Tester si OK
			$this->pdo->commit();

			return $result;
			}
		catch (\Throwable $throwable)
			{
			// TODO: Tester si OK
			$this->pdo->rollBack();

			// TODO: Throw
			throw $throwable;
			}
		}
	}
