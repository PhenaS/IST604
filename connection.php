<?php

//local server info
$server = "tcp:phena.database.windows.net,1433";
$username = senediak;
$password = "ste11PHEN**";
$db = "phena";

//check connection

try {
    $handle = new PDO("sqlsrv:host=$server;dbname=$db","$username", "$password");
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
} catch(PDOException $e) {
  die("Oops. Something went wrong in the database.")
  $e->getMessage();
}
?>