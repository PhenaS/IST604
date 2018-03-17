<?php
$serverName = "phena.database.windows.net";
$connectionOptions = array(
    "Database" => "IST604",
    "Uid" => "senediak",
    "PWD" => "ste11PHEN**"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT * FROM employee";
$getResults= sqlsrv_query($conn, $tsql);
echo $getResults;
?>