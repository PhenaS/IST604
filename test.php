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
    <tbody

<?php
session_start();

while ($row = $_SESSION['table']->fetch())
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
        <td><a href="test.php">Edit</a></td>
        <td><a href="delete.php">Delete</a></td>
      </tr> 
      </tbody>
  </table>