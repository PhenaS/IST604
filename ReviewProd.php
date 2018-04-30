<!DOCTYPE html>
<html>
<head>

<?php
    session_start();
    if($_SESSION["authenticated"] !== 'true'){
     header('Location: login.php');   
    }
    $empid = $_SESSION['Empid'];

    try{
        include 'config.php';
        
        $conn = new PDO ("sqlsrv:Server = $host; Database = $db", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("SELECT line_id, time_stamp, entry_date, emp_id, individual_id, op_id, hours_worked, job_id, pieces_produced FROM piece_production_sheet WHERE  entry_date >= getdate() AND emp_id = " . $empid . ""); 
        $stmt = $conn->query("$sql");
        }catch(Exception $e){die(print_r($e));}
 ?>

<meta name="viewport" content="width=device-width, initial-scalogin.phpe=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Todays Entry</h2> 
  <p>Please Review the Records You Entered Today:</p>                                                                                      
  <div class="table-responsive">          

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>individual_id</th>
        <th>Hours</th>
        <th>job</th>
        <th>operation</th>
        <th>pieces</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $stmt->fetch())
    {  
      ?>
      <tr>
        <td> <?php echo $row['line_id']; ?> </td>
        <td> <?php echo $row['entry_date']; ?> </td>
        <td> <?php echo $row['individual_id']; ?> </td>
        <td> <?php echo $row['hours_worked']; ?> </td>
        <td> <?php echo $row['job_id']; ?> </td>
        <td> <?php echo $row['op_id']; ?> </td>
        <td> <?php echo $row['pieces_produced']; ?> </td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
      </tr>
    <?php 
  } ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>