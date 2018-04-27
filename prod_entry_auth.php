<?php
$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];
$indid = $_POST["Individual"];
$jobid = $_POST["job"];
$opid = $_POST["op"];
$qty = $_POST["piece_qty"];
$workdate = $_POST["work_date"];
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