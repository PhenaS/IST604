<?php 
     
$username = null;
$password = null;

try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT pwd, emp_id first_name, last_name FROM employee WHERE emp_id='$empid_POST["employeeid"]'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}



if(!empty($_POST["employeeid"]) && !empty($_POST["password"])) {
        $empid = $_POST["employeeid"];
        $password = $_POST["password"];
else{
            header('Location: login.php');
     }
   
if($username == $row[1] && $password == row[0]) {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: dashboard.php');
}else {
        header('Location: login.php');
       }
?>    
