<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT username, pin, first_name FROM individual WHERE username = '" . $_POST["Username"] . "'"); 
    $stmt = $conn->query("$sql");
    $sow = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}


if(!empty($_POST["Username"]) && !empty($_POST["PIN"])) {
        $username = $_POST["Username"];
        $pin = $_POST["PIN"];
}else{
            header('Location: individuallogin.php');
     }
   
if("$pin" == "$sow[1]") {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: individualdash.php');
}else {
  header('Location:individuallogin.php');
  echo "Incorrect Username or PIN";
       }
?>    
