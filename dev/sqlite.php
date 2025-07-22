<?php

class DevDB extends \Monk\SQLite
	{
	use \Monk\QueryInto;

	public function __construct()
		{
		parent::__construct(new SplFileInfo(__DIR__ . DIRECTORY_SEPARATOR . 'database.sqlite'));
		}
	}

// TODO: Nul, pas en dur chemin fichier !!!!!!!
//$sqlite = new \Monk\SQLite(new SplFileInfo('./dev/database.sqlite'));
//$sqlite = new \Monk\SQLite(new SplFileInfo(__DIR__ . DIRECTORY_SEPARATOR . 'database.sqlite'));
//$sqlite->transaction(function() use ($sqlite){});
//$sql = 'INSERT INTO `data`(`x`, `y`, `z`) VALUES(:x, :y, :z);';
//$sqlite->execute($sql, [':x' => 42.0, ':y' => null, ':z' => 'XYZ']);
//$records = $sqlite->queryAll('SELECT `id`, `x`, `y`, `z` FROM `data`;');
//var_dump($records);

class Data
	{
	public int $id;
	public float $x;
	public float|null $y;
	public string $z;
	}

$data = new Data();

$data->__invoke = function():void
	{
	var_dump($this);
	};

function printData():void
	{
	global $data;
	var_dump($data);
	}

$database = new DevDB();


$database->queryInto('SELECT `id`, `x`, `y`, `z` FROM `data`;', [], $data);

$database->queryAllInto('SELECT `id`, `x`, `y`, `z` FROM `data`;', $data, $data->__invoke);
