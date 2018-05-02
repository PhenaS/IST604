<?php
session_start();
if($_SESSION["authenticated"] !== 'true'){
   header('Location: login.php');   
   }

include 'config.php';    
 
try{
     $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = ("DELETE FROM piece_production_sheet WHERE line_id =  " . $_SESSION['line'] . ""); 
     $stmt = $conn->query("$sql");
     $conn = NULL;
     echo "Succesfully Deleted!";
     header("refresh:1;url=review_prod.php");
     }catch(Exception $e){die(print_r($e));}    
 
?>
 