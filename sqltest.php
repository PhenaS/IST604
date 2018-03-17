<?php
$host = 'phena.databae.windows.net';
$username = 'senediak@phena';
$password = 'ste11PHEN**';
$db_name = 'phena';

//Establishes the connection
$conn = mysqli_init();
sqlsrv_connect($conn, $host, $username, $password, $db_name);

//Run the Select query
printf("Reading data from table: \n");
$res = sql_query($conn, 'SELECT * FROM staff');
while ($row = sqlsrv_fetch_array($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($conn);
?>