<?php 

$host = "tcp:phena.database.windows.net,1433";
$user = "senediak";
$pwd = "ste11PHEN**";
$db = "IST604";
$conn = new PDO ("sqlsrv:Server = $host; Datbase = $db", $user, $pwd);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = ("SELECT first_name, last_name FROM employee WHERE emp_id = 100"); 
$stmt = $conn->query("sql");
$row = $stmt->fetch();
echo "$row[0] $row[1] $row[2]";
$conn = NULL;

if(sqlsrv_has_rows($stmt)) 
{ 
    echo "Welcome."; 
} 
else 
{ 
    echo "Invalid password."; 
} 
?>