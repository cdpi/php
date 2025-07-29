<?php

final class TestServer
	{
	use \CDPI\Server;

	public function __invoke():void
		{
		$this->testGetDefaultValue();

		assert($this->getDocumentRoot() === '/home/thefab/Documents/Projets/PHP');

		assert($this->getScriptFileName() === '/home/thefab/Documents/Projets/PHP/tests/index.php');

		assert($this->getServerSoftware() === 'PHP 8.0.30 Development Server');

		assert($this->getServerName() === 'localhost');

		assert($this->getServerProtocol() === 'HTTP/1.1');
		}

	public function testGetDefaultValue():void
		{
		assert($this->getValue('XYZ_SERVER_VARIABLE_ABC') === null);

		assert($this->getValue('XYZ_SERVER_VARIABLE_ABC', 'DEF') === 'DEF');
		}
	}
