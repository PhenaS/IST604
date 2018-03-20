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
  <div class="w3-row-padding">
  <div class="w3-col s4">
    <h4>Solutions at Work Inc</h4>
    <p>SAW Staff Login</p>
      <form id="login" name="login" method="post">
        <p><input class="w3-input w3-border" type="text" placeholder="EmployeeID" name="EmployeeID" required></p>
        <p><input class="w3-input w3-border" type="password" placeholder="Password" name="Password" required></p>
        <button type="submit" class="w3-button w3-block w3-black">Submit</button>
      </form> 
     
<?php 
    require_once('config.php');

    $sql = ("SELECT pwd, first_name, last_name FROM employee WHERE emp_id='{$_POST["EmployeeID"]}'"); 
    $stmt = $conn->query("$sql");
    $row = $stmt->fetch();
    $conn = NULL;
        
    if(empty($_POST["Password"]))
    {
    echo "Please enter your password";
    }elseif($_POST["Password"] == $row[0]){
    header("Location: dashboard.php");
    }
?>   
    </div>
    </div>  
</body>
</html>

        