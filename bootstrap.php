<?php

require_once __DIR__ . '/config.php';

require_once __DIR__ . '/CDPI/Loader.php';

\CDPI\Loader::register(\CDPI\Loader::loader(__DIR__));

//$twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'));
