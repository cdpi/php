<?php

namespace Monk;

use \PDO, \SplFileInfo;

use function \call_user_func, \sprintf;

/**
 * <h1>SQLite</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class SQLite
	{
	//SQLiteSchema.php
	//sqlite:/opt/databases/mydb.sq3
	//sqlite::memory:
	//sqlite:

	protected PDO $pdo;

	/**
	 * @since 0.1.0
	 */
	public function __construct(SplFileInfo|string $file)
		{
		$path = ($file instanceof SplFileInfo) ? $file->getRealPath() : $file;

		$this->pdo = new PDO(sprintf('sqlite:%s', $path));

		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

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

		//return null;
		}

	/*
	public function __invoke(callable $code, int $n = 100000):float
		{
		}
	*/
	}
