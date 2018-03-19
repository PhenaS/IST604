<?php

//local server info


//check connection

try {
    $host = "phena.database.windows.net";
    $user = "senediak";
    $pwd = "ste11PHEN**";
    $db = "phena";
    $conn = new PDO("sqlsrv:Server = $host; Database = $db","$user", "$pwd");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT * FROM employee WHERE emp_id = 100");
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    echo "$row[0] $row[1] $row[2]";
    $conn = NULL;
} catch(Exception $e){die(print_r($e));}
?>