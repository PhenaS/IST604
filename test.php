<?php 
   
try{
    include 'config.php';
    
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT pwd, emp_id, first_name, last_name FROM employee WHERE emp_id= '" . $_POST["EmployeeID"] . "'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
    }catch(Exception $e){die(print_r($e));}
    
    if(!empty($_POST["EmployeeID"]) && !empty($_POST["Password"])) {
        $empid = $_POST["EmployeeID"];
        $password = $_POST["Password"];
}else{
            echo "nothing entered";
     }
   
if($password == $row[0]) {
  echo $row[0];
  echo $row[1];
  echo $password;
  echo $empid
}else {
  echo $row[0];
  echo $row[1];
  echo $password;
  echo $empid
       }
?>    
