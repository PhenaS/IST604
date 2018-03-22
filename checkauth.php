<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT pwd, first_name, last_name FROM employee WHERE emp_id= '" . $_POST['employeeid'] . "'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}


if(!empty($_POST["employeeid"]) && !empty($_POST["password"])) {
        $empid = $_POST["employeeid"];
        $password = $_POST["password"];
}else{
            header('Location: login.php');
     }
   
if($empid == $row[1] && $password == row[0]) {
  session_start();
  $_SESSION["authenticated"] = 'true';
  header('Location: dashboard.php');
}else {
        echo $row[1]; 
        echo $row[0];
       }
?>    
