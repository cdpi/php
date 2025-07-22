<?php

// Pas possible avec ini_set donc: php -d 'zend.assertions=1' -S localhost:8000

if (ini_get('zend.assertions') !== '1')
	{
	die('zend.assertions');
	}

require_once '../bootstrap.php';

require_once 'TestServer.php';
require_once 'TestRequest.php';
require_once 'TestCalendar.php';
require_once 'TestDatabaseGenerator.php';

(new TestServer())();
//(new \Monk\HeaderTest())();
//(new \Monk\EncodingTest())();
(new TestRequest())();
(new TestCalendar())();
(new TestDatabaseGenerator())();

echo 'OK';
