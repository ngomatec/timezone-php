<?php

namespace App\services;

use DateTime;


class TimeZone
{
	private array $timeZone;

	public function get(): array
	{
		$this->setTimeZone();

		$tZones = [];

		foreach ($this->timeZone as $value) {
			$data = explode('/', $value);

			date_default_timezone_set($value);
			$datetime = (new DateTime())->format("Y-m-d H:i:s");

			$tZones[] = (object) ['continent' => $data[0], 'city' => $data[1], 'timezone' => $value, 'datetime' => $datetime];
		}

		return array_chunk($tZones, 7);
	}

	public function getDate(string $date='')
	{
		date_default_timezone_set('Africa/Luanda');
		if($date) return $date;

		return (new DateTime())->format("Y-m-d H:i:s");
	}

	private function setTimeZone(): void
	{
		$this->timeZone = [
			'Africa/Cairo', 'Africa/Kigali', 'Africa/Sao_Tome',
			'Africa/Casablanca', 'Africa/Kinshasa', 'Africa/Luanda', 
			'Africa/Maputo', 'Africa/Addis_Ababa', 'Africa/Brazzaville', 
			'Africa/Lagos', 'Africa/Lubumbashi', 'Africa/Nairobi', 
			'Africa/Tunis', 'Africa/Conakry', 'Africa/Libreville',
			'Africa/Lusaka', 'Africa/Windhoek',
			'America/Bahia', 'America/Toronto',
			'Asia/Tokyo', 'Asia/Dubai'
		];
	}
}