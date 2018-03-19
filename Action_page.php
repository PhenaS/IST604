<?php
try {
    include 'config.php';
    $conn = new PDO("sqlsrv:Server = $host;Database = $db","$user","$pwd");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT first_name, last_name FROM employee WHERE emp_id = '{$_POST[EmployeeID]}'");
    $sql=sqlsrv_query(sprintf("SELECT first_name, last_name FROM employee WHERE emp_id='{$_POST[EmployeeID]}'",sqlsrv_escape_string($_POST['user'])));
    $stmt = $conn->query("$sql");
    $emp = $stmt->fetch();
    echo "$emp[0] $emp[1] $emp[2]";
    $emp = NULL;
} catch(Exception $e){die(print_r($e));}
?>