<?php

namespace CDPI\Database;

/**
 * <h1>SQLiteSchema</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
final class SQLiteSchema implements \CDPI\Database\Schema\SchemaInterface
	{
	/**
	 * @since 0.1.0
	 */
	// TODO: Check
	public function quote(string $name):string
		{
		return "`$name`";
		}

	/*
	// TODO: Types
	public function mapType(string $type, int|null $size):string
		{
		return 'TEXT';
		}
	*/
	}
