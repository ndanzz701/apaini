<?php

function between($a,$b){

    $begin = new DateTime( $a );
    $end = new DateTime( $b );
    $end = $end->modify( '+1 day' ); 
    
    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($begin, $interval ,$end);
    
    foreach($daterange as $date){
        echo $date->format("Y-m-d") . PHP_EOL;
    }
}

echo between('2012-08-25','2012-08-31')

?>
