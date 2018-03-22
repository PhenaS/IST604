<!DOCTYPE html>
<html>
<title>Solutions At Work Inc.</title>
<?php
if ($_SESSION['authorized'] == false) {
  header ("Location: login.php");
}
?>
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

    <body class="w3-content" style="max-width:1200px">
    <div class="w3-row-padding">
    <div class="w3-col s4">
        <h3>Solutions at Work Inc</h3>
        <p>Please choose what <br>
           you'd like to do</p>
    </div>
        <Ul>
            <li><a href="rating_dash.php">Employee Ratings</a></li>
            <li><a href="job_dash.php">Job Info</a></li>
            <li><a href="payroll_dash.php">Payroll</a></li>
            <li><a href="admin_dash.php">Administrative Reports</a></li>
        </Ul>
    </body>
</html>