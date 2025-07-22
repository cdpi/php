<?php

class TestCalendar extends \Monk\Calendar
	{
	public function __construct()
		{
		parent::__construct();

		$this->date = $this->date(8, 6, 2025);
		}

	public function __invoke():void
		{
		assert($this->getDay() === 8);
		assert($this->getMonth() === 6);
		assert($this->getYear() === 2025);
		}
	}
