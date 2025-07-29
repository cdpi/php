<?php

namespace CDPI;

/**
 * <h1>HTML</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait HTML
	{
	private $flags = \ENT_QUOTES | \ENT_SUBSTITUTE | \ENT_HTML5;

	/**
	 * @since 0.1.0
	 */
	public function encode(string $text):string
		{
		return \htmlspecialchars($text, $this->flags);
		}

	/**
	 * @since 0.1.0
	 */
	public function decode(string $text):string
		{
		return \htmlspecialchars_decode($text, $this->flags);
		}

	/**
	 * @since 0.1.0
	 */
	public function sanitize():mixed
		{
		//$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
		throw new \RuntimeException('HTML::sanitize()');
		}

	/**
	 * @since 0.1.0
	 */
	public function validate():mixed
		{
		throw new \RuntimeException('HTML::validate()');
		}

	/**
	 * @since 0.1.0
	 */
	public function openTag(string $name, array $attributes = []):string
		{
		$x = '';

		foreach ($attributes as $attribute => $value)
			{
			$x .= ' ' . $this->encode($attribute) . '="' . $this->encode($value) . '"';
			}

		return \sprintf('<%s%s>', $this->encode($name), $x);
		}

	/**
	 * @since 0.1.0
	 */
	public function closeTag(string $name):string
		{
		return \sprintf('</%s>', $this->encode($name));
		}

	// public static function tag(string $name, array $attributes = [], $content = null):string

	/**
	 * @since 0.1.0
	 */
	public function __invoke(string $name, array $attributes = [], mixed $content = null):void
		{
		echo $this->openTag($name, $attributes);
		echo $content;
		echo $this->closeTag($name);
		}
	}
