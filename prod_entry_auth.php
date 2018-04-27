<?php
session_start();
if($_SESSION["authenticated"] !== 'true'){
   header('Location: login.php');   
   }

$timein = $_POST["TimeIn"];
$timeout = $_POST["TimeOut"];
$indid = $_POST["Individual"];
$job = $_POST["job"];
$op = $_POST["op"];
$qty = $_POST["piece_qty"];
$workdate = $_POST["work_date"];

$workingHours = (strtotime($timeout) - strtotime($timein)) / 3600;

$empid = $_SESSION["Empid"];

include 'config.php';    
 
try{
     $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = ("INSERT INTO piece_production_sheet (entry_date, emp_id, individual_id, op_id, hours_worked, job_id, pieces_produced ) 
     VALUES ('" . $workdate . "'," . $empid . ", " . $indid . " , " . $opid . ", " . $workingHours . ", " . $job . ", " . $qty . ")"); 
     $stmt = $conn->query("$sql");
     $conn = NULL;
     echo "Succesfully Added!";
     header("refresh:2;url=engineer_dashboard.php");
     }catch(Exception $e){die(print_r($e));}    
 
?>
