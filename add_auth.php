<?php
include 'config.php';      
try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("INSERT INTO individual (first_name, last_name, birthdate) VALUES ('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "', '" . $_POST["bday"] . "')"); 
    $stmt = $conn->query("$sql");
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}    
?>
