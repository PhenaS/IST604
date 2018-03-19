<?php

//local server info
$server = "phena.database.windows.net";
$username = "senediak";
$password = "ste11PHEN**";
$db = "phena";

//check connection

try {
    $handle = new PDO("sqlsrv:Server=$server;dbname=$db","$username", "$password");
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT * FROM employee");
    $stmt = $handle->query("$sql");
    $row = $stmt->fetch();
    echo "$row[0] $row[1] $row[2]";
    $handle = NULL;
} catch(Exception $e){die(print_r($e));}
?>