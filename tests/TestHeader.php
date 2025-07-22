<?php

final class TestHeader
	{
	use \Monk\Header;

	public function __invoke():void
		{
		//$this->testParseAccept();

		/*
		$language = $request->parseAcceptLanguage();
		assert(count($language) === 4);
		assert($language['fr-FR'] === 0.8);

		$encoding = $request->parseAcceptEncoding();
		assert(count($encoding) === 4);
		assert($encoding['zstd'] === 1.0);
		*/
		}

	public function testParseAccept():void
		{
		$accept = $this->parseAccept();

		assert(\count($accept) === 4);

		assert($accept['text/html'] === 1.0);
		}
	}
