<?php

namespace resources\library;

class Counter
{

	function start(int $end, int $start=0): array
	{
		$arr = array();

		for($i=$start; $i < $end + 1; $i++) {
			$arr[] = $i;
		}

		return $arr;

	}

}
