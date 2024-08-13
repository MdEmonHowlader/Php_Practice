<?php
    function convertToHourMinute($seconds){
        $hours = floor($seconds / 3600);
        $minutes= floor($seconds % 3600)/60;

        return $hours . ':' . $minutes;
    }

    $seconds = intval(trim(fgets(STDIN)));
    echo convertToHourMinute($seconds);

?>