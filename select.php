<?php
include 'config.php';    

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $db->prepare("SELECT first_name, last_name FROM individual");
    $result->execute();
    
    while ($row = $db->fetch(PDO::FETCH_ASSOC))
    {
    $title = $row['first_name'];
    $body = $row['last_name'];
    }

    echo $title;
    echo $body;

?>
