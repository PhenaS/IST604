<!DOCTYPE html>
<html>

<title>Solutions At Work Inc.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

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
</html>