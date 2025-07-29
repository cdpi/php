<?php

namespace CDPI\Database\Schema;

/**
 * <h1>Schema</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Schema
	{
	use \CDPI\JSON;

	private array $tables = array();
	private array $types = array();

	/**
	 * @since 0.1.0
	 */
	public function getTable(string $name):Table
		{
		return $this->tables[$name];
		}

	/**
	 * @since 0.1.0
	 */
	public function getTables():array
		{
		return $this->tables;
		}

	/**
	 * @since 0.1.0
	 */
	public function getType(string $name):Type
		{
		return $this->types[$name];
		}

	/**
	 * @since 0.1.0
	 */
	public static function read(string $path):Schema
		{
		// TODO: IO
		$json = \file_get_contents($path);

		// TODO: JSON (commencé)
		$json = self::decode($json);

		$schema = new Schema();

		$types = array();

		foreach ($json['types'] as $name => $type)
			{
			$types[$name] = Type::map($type);
			}

		$schema->types = $types;

		$tables = array();

		foreach ($json['tables'] as $name => $table)
			{
			$tables[$name] = Table::map($table);
			}

		$schema->tables = $tables;

		return $schema;
		}
	}
