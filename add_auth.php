<?php
include 'config.php';    
if(empty($_POST["FirstName"]) or empty($_POST["LastName"]) or empty($_POST["bday"])){
    header('add_employee.php');

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("INSERT INTO individual (first_name, last_name, birthdate) VALUES ('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "', '" . $_POST["bday"] . "')"); 
    $stmt = $conn->query("$sql");
    $conn = NULL;
    echo "Succesfully Added!";
    }catch(Exception $e){die(print_r($e));}    
?>
