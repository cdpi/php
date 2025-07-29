<?php

/*
var_dump(DATABASE);

class DevDB extends \CDPI\Database\SQLite
	{
	use \CDPI\Database\QueryInto;

	public function __construct()
		{
		parent::__construct(new SplFileInfo(DATABASE));
		}
	}
*/

//$sqlite->transaction(function() use ($sqlite){});
//$sql = 'INSERT INTO `data`(`x`, `y`, `z`) VALUES(:x, :y, :z);';
//$sqlite->execute($sql, [':x' => 42.0, ':y' => null, ':z' => 'XYZ']);

class Data
	{
	public int $id;
	public float $x;
	public float|null $y;
	public string $z;
	}

$data = new Data();

$database = new \CDPI\Database\SQLite(new SplFileInfo(DATABASE));

// OK
//$records = $database->queryAll('SELECT `id`, `x`, `y`, `z` FROM `data`;');
//var_dump($records);

//$database->queryInto('SELECT `id`, `x`, `y`, `z` FROM `data`;', [], $data);

function printData():void
	{
	global $data;
	var_dump($data);
	}

$database->queryAllInto('SELECT `id`, `x`, `y`, `z` FROM `data`;', $data, 'printData');
