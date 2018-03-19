<form method="post" action="injection.php" enctype="multipart/form-data" > 
    Username:<input type="text" name="Username" id="Username"/></br> 
    Password:<input type="text" name="Password" id="Password"/></br> 
    <input type="submit" name="submit" value="Submit" /> 
</form> 
<?php 
$params = array($_POST['Username'], $_POST['Password']);

host = "tcp:phena.database.windows.net,1433";
$user = "senediak";
$pwd = "ste11PHEN**";
$db = "IST604";

$conn = sqlsrv_connect($host, $user, $pwd, $db); 
$sql = "SELECT * FROM employee WHERE emp_id = ? and pwd = ?"; 
$stmt = sqlsrv_query($conn, $sql, $params); 
if(sqlsrv_has_rows($stmt)) 
{ 
    echo "Welcome."; 
} 
else 
{ 
    echo "Invalid password."; 
} 
?>