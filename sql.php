<?php
$serverName = "tcp:phena.database.windows.net,1433;Initial";
$connectionOptions = array(
    "Database" => "phena",
    "Uid" => "senediak",
    "PWD" => "ste11PHEN**"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "Select first_name, emp_id FROM employee;";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);

if ($getResults == FALSE) {
    echo (sqlsrv_errors());
} else {
    echo $getresults
}

sqlsrv_free_stmt($getResults);
?>