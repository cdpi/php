<?php

//var_dump(ini_get('max_execution_time'));
//ini_set('max_execution_time', 5); // pas affécté par sleep ??????

set_time_limit(5);

register_shutdown_function(function()
	{
	echo 'end';
	});

register_shutdown_function(function()
	{
	$error = error_get_last();
	//if ($error['type'] === E_ERROR) {
	var_dump($error);
	});

/*
for ($i = 0; $i < 10; $i++)
	{
	echo $i;
	sleep(10);
	}
*/

while (true)
	{
	$a = 344 / 2;
	}
