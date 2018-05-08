<!DOCTYPE html>

<html>
    <head>
        <title>Solutions At Work Inc.</title>
    </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>  
    <body>
    <h4>Solutions at Work Inc</h4>    
    <?php
    include("login.php")
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
    $conn = NULL;
}catch(Exception $e){die(print_r($e));}
?>
        <p>Welcome <?php echo "$row[0]"; ?>!</p>  
    </body>
</html>