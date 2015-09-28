<?php
class monthlyCalendar
{
	public $monthEvents;
	public $month;
	public $previous_month;
	public $next_month;
	
	public function __construct( $month_index, $year )
	{
		$this->month = new monthCalendar( $month_index, $year );
		$this->previous_month = new monthCalendar( $month_index - 1, $year );
		$this->next_month = new monthCalendar( $month_index + 1, $year );
	}
}
?>
