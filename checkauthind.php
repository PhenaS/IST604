<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT username, pin FROM individual WHERE username= '" . $_POST["Username"] . "'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}


if(!empty($_POST["Username"]) && !empty($_POST["PIN"])) {
        $indun = $_POST["Username"];
        $pin = $_POST["PIN"];
}else{
            header('Location: login.php');
     }
   
if("$password" == "$row[0]") {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: dashboard.php');
}else {
  header('Location: login.php');
       }
?>