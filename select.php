<?php
include 'config.php';    

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $row = $db->query('SELECT first_name FROM individual')->fetchAll();
    foreach($row as $ticket){
    echo $ticket['first_name'];
    }
}catch(Exception $e){die(print_r($e));}
?>
