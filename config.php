<?php 
try{
    $host = "tcp:phena.database.windows.net,1433";
    $user = "senediak";
    $pwd = "ste11PHEN**";
    $db = "IST604";
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){die(print_r($e));
?>