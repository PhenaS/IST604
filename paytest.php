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
    
    
    
?>


