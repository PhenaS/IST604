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
echo $indid;
echo $jobid;
echo $opid;
echo $qty;
echo $workdate;



?>