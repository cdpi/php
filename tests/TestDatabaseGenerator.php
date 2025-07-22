<?php

use \Monk\Database\Generator\Schema;

class TestDatabaseGenerator
	{
	public function __construct()
		{
		//parent::__construct();
		}

	public function testReadSchema():void
		{
		$schema = Schema::read(__DIR__ . '/../dev/database.json');

		assert($schema !== null);

		$contact = $schema->getTable('contact');

		assert($contact !== null);

		// TODO: Test SQL

		//public function database(string $path, SchemaInterface $schema):void
		//$s = \Monk\Generator\Database\Schema::read($path);
		//$generator = new \Monk\Generator\Database\Generator();
		//$generator->sql($s, $schema);
		}

	public function __invoke():void
		{
		$this->testReadSchema();
		}
	}
