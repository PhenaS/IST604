<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("UPDATE piece_production_sheet SET hours_worked = " . $_POST["Hours"] . ", individual_id = " . $_POST["IndID"] . ", op_id = " . $_POST["opnum"] . ", job_id = " . $_POST["jobnum"] . ", emp_id = " . $_POST["EmployeeID"] . ", pieces_produced = " . $_POST["qty"] . " WHERE line_id = " . $_POST["line"] . ""); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}


    
?>