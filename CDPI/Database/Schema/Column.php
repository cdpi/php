<?php

namespace CDPI\Database\Schema;

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

	/**
	 * @since 0.1.0
	 */
	public function getName():string
		{
		return $this->name;
		}

	/**
	 * @since 0.1.0
	 */
	public function getType():Type
		{
		return $this->type;
		}

	/**
	 * @since 0.1.0
	 */
	public static function map(string $name, array $json):Column
		{
		$column = new Column();

		$column->name = $name;
		$column->type = Type::map($json);

		return $column;
		}
	}
