<?php 


class calendar {

	private $currentYear = 0;
	private $currentMonth = 0;
	private $numberOfDays = 0;
	private $daysOfWeek = array('S','M','T','W','T','F','S');

	public function __construct() {

		$this->numberOfDays = date("t");

	}

	function showCalendar($date) {

		echo $date;
		if (!isset($date)) {
			$date = mktime();
		}

		//Create Month and Date Header
		$output .= "<div class='CalendarLabel'>";
		$output .= date("F", $date);
		$output .= date("Y", $date);
		$output .= "</div>";
		$output .= "<table class='CalendarTable'><tr>";

		//Display Letter for Days of Week
		foreach ($this->daysOfWeek as $day) {
			$output .= "<th class='TableHeader'>$day</th>";
		}

		$output .= "</tr><tr>";

		$currentDay = 1;
		//Get the day of week for first day of month.
		//$today = mktime(0, 0, 0, date("m")  , 1, date("Y"));
		$dayOfWeek = date("w", $date);
		
		//Create blank days until the first day of the month.
		if ($dayOfWeek > 0) {
			for ($i = 1; $i <= $dayOfWeek; $i++) {
				$output .="<td class='CalendarDate'>&nbsp;</td>";
			}
		}


		while ($currentDay <= $this->numberOfDays) {

			if ($dayOfWeek == 7) {
				$output .= "</tr><tr>";
				$dayOfWeek = 0;
			}

			$output .= "<td>$currentDay</td>";
			$currentDay++;
			$dayOfWeek++;

		}
		$output .= "</tr></table>";

		return $output;

	}

}

$cal = new calendar();
//$date = mktime(0,0,0,12,1,2017);
echo $cal->showCalendar($date);

?>
