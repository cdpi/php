<?php

require_once __DIR__ . '/config.php';

require_once __DIR__ . '/Monk/Loader.php';

\Monk\Loader::register(\Monk\Loader::loader(__DIR__));

//$twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates'));
