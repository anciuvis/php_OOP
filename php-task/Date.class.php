<?php
class Date {
	public $date1;
	public $date2;
	public function difference($date1, $date2) {
		$interval = $date1->diff($date2);
		echo $interval->format('Difference between ' . $date1->format('Y-m-d') . ' and ' . $date2->format('Y-m-d') . ' is:<br> %r %y years, %m months %d days <br>---<br>');
	}
}
