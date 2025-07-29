<?php

class DevServer
	{
	use \CDPI\Server;
	}

$server = new DevServer();

var_dump($server->getRequestDateTime('Europe/Zurich'));
