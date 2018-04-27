<?php
$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];
$indid = $_POST["Individual"];
$job = $_POST["job"];
$op = $_POST["op"];
$qty = $_POST["piece_qty"];
$workdate = $_POST["work_date"];

$workingHours = (strtotime($timeout) - strtotime($timein)) / 3600;
echo $_SESSION["employee_id"];


?>
