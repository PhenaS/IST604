<?php
$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];

$hours = $timeout - $timein;

echo $hours;
?>