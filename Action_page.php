<?php
try {
    include 'config.php';
    $conn = new PDO("sqlsrv:Server = $host;Database = $db","$user","$pwd");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT first_name, last_name FROM employee WHERE emp_id = '{$_POST[EmployeeID]}'");
    $stmt = $conn->query("$sql");
    $emp = $stmt->fetch();
    echo "$emp[0] $emp[1] $emp[2]";
    $conn = NULL;
} catch(Exception $e){die(print_r($e));}
?>