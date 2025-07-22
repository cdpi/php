<?php

namespace Monk;

//use \PDO, \SplFileInfo;
//use function \call_user_func, \sprintf;

/**
 * <h1>Query</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait Query
	{
	/**
	 * @since 0.1.0
	 */
	//public function getAll(string $sql, array $parameters, object $instance):void
	public function getOne():void
		{
		/*
		$statement = $this->pdo->prepare($sql);
		$statement->setFetchMode(PDO::FETCH_INTO, $instance);
		$statement->execute($parameters);
		$statement->fetch();
		*/
		}

	/**
	 * @since 0.1.0
	 */
	//public function getAll(string $sql, array $parameters, object $instance):void
	public function getAll():void
		{
		/*
		$statement = $this->pdo->prepare($sql);
		$statement->setFetchMode(PDO::FETCH_INTO, $instance);
		$statement->execute($parameters);
		$statement->fetch();
		*/
		}

	public function select():void
		{
		}

	public function insert():void
		{
		}

	public function update():void
		{
		}

	public function delete():void
		{
		}
	}
