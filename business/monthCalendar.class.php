<?php
class monthCalendar
{
	public $start_weekday_index;
	public $end_day;
	public $title;
	public $year;
	public $days;
	public $month;
	
	public function __construct( $month_index, $year )
	{
	
		if( $month_index > 12 )
		{
			$month_index = $month_index % 12;
			$year++;
		}
		if( $month_index < 1 )
		{
			$month_index = 12;
			$year--;
		}
		
		$month_info = $year.'-'.$month_index.'-01';
		
		$this->month = $month_index;
		$this->title = date( 'F', strtotime( $month_info ) );
		$this->start_weekday_index = $this->setWeekdayIndex( date( 'l', strtotime( $month_info ) ) );
		$this->end_day = date( 't', strtotime( $month_info ) );
		$this->year = $year;
		$this->days = array();
		$this->setDays();
	}
	private function setWeekdayIndex( $week_day )
	{
		$weekdays = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' );
		
		for( $i = 0; $i < sizeof( $weekdays ); $i++ )
			if( $week_day == $weekdays[ $i ] )
				return $i;
		return -1;
	}
	private function setDays()
	{
		for( $i = 0; $i < $this->end_day; $i++ )
			$this->days[ $i ] = new Day( ( $i + 1 ), $this->month, $this->year );
	}
}
?>
