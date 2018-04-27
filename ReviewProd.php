<!DOCTYPE html>
<html>
<head>

<?php
    session_start();
    if($_SESSION["authenticated"] !== 'true'){
     header('Location: login.php');   
    }

    try{
        include 'config.php';
        
        $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("SELECT line_id, time_stamp, entry_date, emp_id, individual_id, op_id, hours_worked, job_id, pieces_produced ); 
        $stmt = $conn->query("$sql");
        $row = $stmt->fetch();
        $conn = NULL;
        }catch(Exception $e){die(print_r($e));}
 ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row ?></td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>