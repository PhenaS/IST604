<!DOCTYPE html>
<html>
    
<?php
    session_start();
    if($_SESSION["authenticated"] !== 'true'){
     header('Location: login.php');   
    }
    $empid = $_SESSION['Empid'];

    try{
        include 'config.php';
        
        $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("SELECT line_id, time_stamp, entry_date, emp_id, individual_id, op_id, hours_worked, job_id, pieces_produced FROM piece_production_sheet WHERE  line_id = " . $_SESSION['line'] . ""); 
        $stmt = $conn->query("$sql");
        $row = $stmt->fetch()
        }catch(Exception $e){die(print_r($e));}
?>    
    
    
<head>
        <title>Solutions At Work Inc.</title>
</head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>  
  
<body> 
  <div class="w3-row-padding">
  <div class="w3-col s4">
    <h4>Solutions at Work Inc</h4>
    <p>Please be sure you are an employee of Solutions At Work Inc.  </p>
      <form id="login" name="login" form action="editauth.php" method="post" style="width:80%">
        <p><input class="w3-input w3-border" type="Text" value="<?php session_start(); echo $row['line_id']; ?>" name="line" required disabled></p>
        <p><input class="w3-input w3-border" type="Text" value="<?php  echo $row['individual_id']; ?>" name="IndID" pattern=".{3,5}" required title="Invalid"></p>
        <p><input class="w3-input w3-border" type="number" value="<?php  echo $row['hours_worked']; ?>" name="Hours" required></p>
        <p><input class="w3-input w3-border" type="number" value="<?php  echo $row['job_id']; ?>" name="jobnum" required></p>
        <p><input class="w3-input w3-border" type="number" value="<?php  echo $row['op_id']; ?>" name="opnum" required></ut type="text">
        <p><input class="w3-input w3-border" type="number" value="<?php  echo $row['pieces_produced']; ?>" name="qty" required></p>
        <button type="submit" class="w3-button w3-block w3-black">Sign Up</button>
      </form> 
     
</body>
</html>