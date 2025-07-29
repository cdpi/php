<?php

namespace CDPI;

/**
 * <h1>Form</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Form
	{
	use HTML;

	public function button(string $label, array $attributes = []):void
		{
		$this('button', $attributes, $label);
		//throw new \RuntimeException('Form::button()');
		}

	/*
	public static final function checkboxGroup(){}
	public static final function checkbox(){}
	public static final function date(){}
	public static final function email(){}
	public static final function file(){}
	public static final function hidden(){}
	public static final function label(){}
	public static final function number(){}
	public static final function option(){}
	public static final function optionGroup(){}
	public static final function passwordGroup(){}
	public static final function password(){}
	public static final function radio(){}
	public static final function radioGroup(){}
	public static final function reset(){}
	public static final function select(){}
	public static final function submit(){}
	public static final function text(){}
	public static final function textGroup(){}
	public static final function textarea(){}
	*/

	/*
	protected static final function input(string $type, string|null $name = null):string
		{
		//   $element = '<input type="text" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '"';

		$element = '<input type="text" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '"';
foreach ($attributes as $key => $attrValue)
{
$element .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($attrValue) . '"';
}
$element .= ' />';
return $element;

		throw new \RuntimeException('Form::input()');
		}
	*/
	}
