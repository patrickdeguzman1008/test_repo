<?php 	

	// function mk_time()/

	function date_long($date)
	{
		echo date('Y-M-d' , strtotime($date));
	}

	function getDateBefore()
	{
		return date('Y/m/d',strtotime("-1 days"));
	}


	function getPastDate($period)
	{
		$now = time(); // or your date as well
        $your_date = strtotime($period);
        $datediff = $now - $your_date;

        echo round($datediff / (60 * 60 * 24));
	}

	function convertNumericDay($day)
	{
		$dayList = [
			'Mon',
			'Tue',
			'Wed',
			'Thu',
			'Fri',
			'Sat',
			'Sun'
		];

		return $dayList[$day];
	}

	function getDayMonthOccurence($year , $month , $day = 'Mon')
	{
		$dates = array();

		for($i=1; $i<30; $i++)
		  {
		    // echo '<br>',
		    $ddd = $year.'-'.$month.'-'.$i;
		    // echo '',
		    $date = date('Y M D d', $time = strtotime($ddd) );

		    if( strpos($date, $day) )
		    {
		      array_push($dates, $date);
		    }
		  }
		  return $dates;
	}
  