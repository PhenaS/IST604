<!DOCTYPE html>
<html>
    <body>
    <?php 
try{
    $host = "tcp:phena.database.windows.net,1433";
    $user = "senediak";
    $pwd = "ste11PHEN**";
    $db = "IST604";
    $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT first_name, last_name FROM employee WHERE emp_id='{$_POST["EmployeeID"]}'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    echo "$row[0] $row[1]";
    $conn = NULL;
}catch(Exception $e){die(print_r($e));}
?>
    </body>
</html>