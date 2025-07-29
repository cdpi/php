<?php

$schema = \CDPI\Database\Schema\Schema::read(SCHEMA);

foreach ($schema->getTables() as $table)
	{
	var_dump($table);
	}
