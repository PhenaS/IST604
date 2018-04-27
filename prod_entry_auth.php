<?php
$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];

$workingHours = (strtotime($timeout) - strtotime($timein)) / 3600;

echo $workingHours;
?>