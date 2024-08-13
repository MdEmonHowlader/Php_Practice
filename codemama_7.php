<?php
    // function convertToHourMinute($seconds){
    //     $hours = floor($seconds / 3600);
    //     $minutes= floor($seconds % 3600)/60;

    //     return $hours . ':' . $minutes;
    // }

    // $seconds = intval(trim(fgets(STDIN)));
    // echo convertToHourMinute($seconds);

    $seconds =(int)trim(fgets(STDIN));
    $hours=$seconds/3600 |0;
    $minutes=($seconds%3600)/60 |0;

    echo $hours. ":" . $minutes ."\n";

?>