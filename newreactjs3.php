<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT username, pin, first_name FROM individual WHERE Username= '" . $_POST["Username"] . "';"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}
    
    echo $_POST["Username"];
    echo $_POST["PIN"];
    echo $row[1];
    echo $row[2];
    ?>
