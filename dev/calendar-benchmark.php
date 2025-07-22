<?php

$time = $benchmark->run(function() { $days = cal_days_in_month(CAL_GREGORIAN, 2, 2025); }, 100000000);

$benchmark->print('cal_days_in_month', $time, 100000000);

/*
$time = benchmark(function()
	{
	for ($i = 0; $i < 10000000; $i++)
		{
		$days = cal_days_in_month(CAL_GREGORIAN, 2, 2025);
		}
	});

echo "cal_days_in_month 10'000'000x = $time secondes\n"; // 1.0971319675446 secondes

$time = benchmark(function()
	{
	$calendar = new \Monk\Calendar();

	for ($i = 0; $i < 1000000; $i++)
		{
		$days = $calendar->getDaysInMonth(2, 2025);
		}
	});

echo "calendar::getDaysInMonth 1'000'000 = $time secondes\n"; // 5.1024150848389 secondes
*/
