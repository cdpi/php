<?php

namespace Monk\Database\Generator;

/**
 * <h1>SchemaInterface</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
interface SchemaInterface
	{
	public function quote(string $name):string;

	public function mapType(string $type, int|null $size):string;
	}
