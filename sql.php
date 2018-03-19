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

if ($getResults == FALSE)
    echo (sqlsrv_errors());

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['first_name'] . " " . $row['emp_id'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);
?>