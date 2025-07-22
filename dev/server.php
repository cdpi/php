<?php

class DevServer
	{
	use \Monk\Server;
	}

$server = new DevServer();

var_dump($server->getRequestDateTime('Europe/Zurich'));
