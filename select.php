
      
<?php
include 'config.php';    
if(empty($_POST["FirstName"]) or empty($_POST["LastName"]) or empty($_POST["bday"])){
    header('Location: add_employee.php');
}else{

try{
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT first_name, last_name FROM individual"); 
    $stmt = $conn->query("$sql");
    $conn = NULL;
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    echo $row['first_name'].", ".$row['last_name']."<br />";
    }catch(Exception $e){die(print_r($e));}    
}
?>
