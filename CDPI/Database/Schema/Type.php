<?php

namespace CDPI\Database\Schema;

/**
 * <h1>Type</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Type
	{
	private string $type;
	private int|null $size = null;
	private bool $nullable;

	/**
	 * @since 0.1.0
	 */
	public function getType():string
		{
		return $this->type;
		}

	/**
	 * @since 0.1.0
	 */
	public function getSize():int|null
		{
		return $this->size;
		}

	/**
	 * @since 0.1.0
	 */
	public function isNullable():bool
		{
		return $this->nullable;
		}

	/**
	 * @since 0.1.0
	 */
	public static function map(array $json):Type
		{
		$type = new Type();

		$type->type = $json['type'];
		$type->size = $json['size'];
		$type->nullable = $json['null'];

		return $type;
		}
	}
