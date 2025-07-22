<?php

namespace Monk\Database\Generator;

/**
 * <h1>Table</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Table
	{
	private array $columns = array();

	public function getColumn(string $name):Column
		{
		return $this->columns[$name];
		}

	public function getColumns():array
		{
		return $this->columns;
		}

	public static function map(array $json):Table
		{
		$table = new Table();

		$columns = array();

		foreach ($json['columns'] as $name => $column)
			{
			if (\is_string($column))
				{
				$columns[$name] = 'REF';
				}
			else
				{
				$columns[$name] = Column::map($name, $column);
				}
			}

		$table->columns = $columns;

		return $table;
		}
	}
