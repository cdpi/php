<?php

namespace Monk\Database\Generator;

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

	public function getType():string
		{
		return $this->type;
		}

	public function getSize():int|null
		{
		return $this->size;
		}

	public function isNullable():bool
		{
		return $this->nullable;
		}

	public static function map(array $json):Type
		{
		$type = new Type();

		$type->type = $json['type'];
		$type->size = $json['size'];
		$type->nullable = $json['null'];

		return $type;
		}
	}
