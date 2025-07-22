<?php

namespace Monk\Database\Generator;

/**
 * <h1>Column</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Column
	{
	private string $name;
	private Type $type;

	public function getName():string
		{
		return $this->name;
		}

	public function getType():Type
		{
		return $this->type;
		}

	public static function map(string $name, array $json):Column
		{
		$column = new Column();

		$column->name = $name;
		$column->type = Type::map($json);

		return $column;
		}
	}
