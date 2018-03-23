<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT username, pin, first_name FROM individual WHERE Username= '" . $_POST["Username"] . "'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}


if(!empty($_POST["Username"]) && !empty($_POST["PIN"])) {
        $username = $_POST["Username"];
        $pin = $_POST["PIN"];
}else{
            header('Location: individuallogin.php');
     }
   
if("$pin" == "$row[1]") {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: dashboard.php');
}else {
  header('Location: login.php');
       }
?>    
