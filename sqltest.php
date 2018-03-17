<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:phena.database.windows.net,1433; Database = IST604", "senediak", "ste11PHEN**");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$connectionInfo = array("UID" => "senediak@phena", "pwd" => "ste11PHEN**", "Database" => "IST604", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:phena.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>