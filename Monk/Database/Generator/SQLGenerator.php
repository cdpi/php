<?php

/**
 * <h1>Generator</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Generator
	{
	public function sql(Schema $schema, \Monk\SchemaInterface $target):void
		{
		foreach ($schema->getTable('contact')->getColumns() as $column)
			{
			echo $target->quote($column->getName());
			}
		}
	}
