<?php

namespace Monk;

use \DateInterval, \DateTime, DateTimeZone;

//var_dump($date->format('Y-m-d H:i:s:u'));

/*
public final function now():DateTime
	{
	return new DateTime('now', $this->timezone);
	}
*/

/**
 * <h1>Calendar</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class Calendar implements \Stringable
	{
	protected DateTime $date;
	protected DateTimeZone $timezone;
	protected DateInterval $periodOneDay;
	protected DateInterval $periodOneMonth;

	/**
	 * @since 0.1.0
	 */
	public function __construct(DateTime|null $date = null, DateTimeZone|string|null $timezone = null)
		{
		/*
		$this->date = is_null($date) ? $this->now() : $date;

		if (isString($timezone))
			{
			$this->timezone = new DateTimeZone($timezone);
			}
		else
			{
			$this->timezone = $timezone;
			}
		*/

		$this->date = new DateTime('now', new DateTimeZone('Europe/Zurich'));
		$this->timezone = new DateTimeZone('Europe/Zurich');

		$this->oneDay = new DateInterval('P1D');
		$this->oneMonth = new DateInterval('P1M');
		}

	/**
	 * @since 0.1.0
	 */
	public final function getDate():DateTime
		{
		return $this->date;
		}

	/**
	 * @since 0.1.0
	 */
	public final function getDay():int
		{
		return $this->getPart($this->date, 'j');
		}

	/**
	 * @since 0.1.0
	 */
	public final function getMonth():int
		{
		return $this->getPart($this->date, 'n');
		}

	/**
	 * @since 0.1.0
	 */
	public final function getYear():int
		{
		return $this->getPart($this->date, 'Y');
		}

	/**
	 * @since 0.1.0
	 */
	public final function getTimeZone():DateTimeZone
		{
		return $this->timezone;
		}

	/**
	 * @since 0.1.0
	 */
	public final function getDaysInMonth(int $month, int $year):int
		{
		$date = $this->date(1, $month, $year);

		$date->add($this->oneMonth);
		$date->sub($this->oneDay);

		return $this->getPart($date, 'j');
		}

	/**
	 * @since 0.1.0
	 */
	public final function date(int $day, int $month, int $year):DateTime
		{
		return new DateTime($this->iso($day, $month, $year), $this->timezone);
		}

	/*
	public final function previousMonth():void
		{
		$this->date->sub($this->oneMonth);
		}

	public final function nextMonth():void
		{
		$this->date->add($this->oneMonth);
		}
	*/

	/**
	 * @since 0.1.0
	 */
	protected final function getPart(DateTime $date, string $part):int
		{
		return \intval($date->format($part));
		}

	/**
	 * @since 0.1.0
	 */
	protected final function iso(int $day, int $month, int $year):string
		{
		return \sprintf('%04d-%02d-%02d', $year, $month, $day);
		}

	// TODO: Calendar::__toString()
	public function __toString():string
		{
		return '[Calendar] TODO';
		}
	}
