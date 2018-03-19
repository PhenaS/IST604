<?php
$serverName = "phena.database.windows.net";
$connectionOptions = array(
    "Database" => "phena",
    "Uid" => "senediak",
    "PWD" => "ste11PHEN**"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "Select first_name, emp_id FROM employee";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
echo $getrsults
if ($getResults == FALSE)
    echo (sqlsrv_errors());

sqlsrv_free_stmt($getResults);
?>