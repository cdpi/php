<?php

namespace Monk;

/**
 * <h1>SQLiteSchema</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
final class SQLiteSchema implements SchemaInterface
	{
	// TODO: Check
	public function quote(string $name):string
		{
		return "`$name`";
		}

	// TODO: Types
	public function mapType(string $type, int|null $size):string
		{
		return 'TEXT';
		}
	}
