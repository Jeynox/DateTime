<?php

$presentTime = new DateTime;

$destinationTime = new DateTime;

$destinationTime->setDate(2015,10,21);
$destinationTime->setTime(4,29);

$interval = $presentTime->diff($destinationTime);

echo $presentTime->format('M-d-Y H:i') . '<br>';

echo $destinationTime->format('M-d-Y H:i') . '<br>';

echo $interval->format("%Y-%M-%D %H:%I:%S");


?>