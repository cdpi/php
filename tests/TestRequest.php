<?php

// echo $_SERVER['HTTP_ACCEPT'] . "\n";  text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
// echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "\n"; fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3
// echo $_SERVER['HTTP_ACCEPT_ENCODING'] . "\n"; gzip, deflate, br, zstd

/*
fr 1
fr-FR 0.8
en-US 0.5
en 0.3
*/

/*
gzip 1
deflate 1
br 1
zstd 1
*/

/*
text/html 1
application/xhtml+xml 1
application/xml 0.9
* /* 0.8
*/

/*
// var_dump($acceptLang); OK
// var_dump($acceptEnc); OK mais espace au début (mais il y en a en fait dans header)
// var_dump($accept); OK
*/

final class TestRequest extends \Monk\Request
	{
	public function __invoke():void
		{
		assert($this->getMethod() === 'GET');

		assert($this->isGET() === true);

		//assert($request->getAccept() === 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8');
		//assert($request->getAcceptLanguage() === 'fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3');
		//assert($request->getAcceptEncoding() === 'gzip, deflate, br, zstd');
		}
	}
