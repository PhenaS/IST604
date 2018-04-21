<?php
include 'config.php';    
if(empty($_POST["FirstName"]) or empty($_POST["LastName"]) or empty($_POST["bday"])){
    header('Location: add_employee.php');
}else{

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("INSERT INTO individual (first_name, last_name, birthdate) VALUES ('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "', '" . $_POST["bday"] . "')"); 
    $stmt = $conn->query("$sql");
    $conn = NULL;
    echo "Succesfully Added!";
    header("refresh:2;url=engineer_dashboard.php");
    }catch(Exception $e){die(print_r($e));}    
}
?>
