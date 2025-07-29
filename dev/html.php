<?php

class DevHTML
	{
	use \CDPI\HTML;
	}

$html = new DevHTML();

echo $html->openTag('div', ['class' => 'dads', 'id' => '#ssd']);
echo $html->closeTag('div');

$html('div', [], 'HTML DIV');

/*
$tag('h1', [], 'dfsdjfhsk djkfshdjkfhdjk');
$tag('p', [], 'dfsdjfhskjdfhs kdjhskjfh djkfshdjkfhdjk');
$tag('p', [], 'dfsdjfhskjdfhs kdjhskjfh djkfshdjkfhdjk');
$tag('p', [], 'dfsdjfhskjdfhs kdjhskjfh djkfshdjkfhdjk');

$form->button('dfsf dfd f');
*/
