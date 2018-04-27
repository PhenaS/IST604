<?php
$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];

$workingHours = (strtotime($timeout) - strtotime($timein)) / 3600;

echo $workingHours;
echo $timein;
echo $timeout;

echo $_POST["Individual"];
echo $_POST["job"];
echo $_POST["op"];
echo $_POST["piece_qty"];
echo $_POST["work_date"];



?>