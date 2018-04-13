<?php
include 'config.php';    

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $tickets = $db->query('SELECT * FROM individual')->fetchAll();
    foreach($tickets as $ticket) {
    echo $ticket['first_name'];
}
?>
