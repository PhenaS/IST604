<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'phena.database.windows.net');
define('DB_USERNAME', 'senediak');
define('DB_PASSWORD', 'ste11PHEN**');
define('DB_NAME', 'IST604');
 
/* Attempt to connect to MySQL database */
$link = sqlsrv_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . sqlsrv_connect_error());
}
?>