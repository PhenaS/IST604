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
    <p>Please be sure you are an employee of Solutions At Work Inc.  </p>
      <form id="login" name="login" form action="checkauth.php" method="post" style="width:80%">
        <p><input class="w3-input w3-border" type="text" placeholder="<?php echo $_SESSION['line'] ?>" name="LName" required></p>
        <p><input class="w3-input w3-border" type="password" placeholder="Last 4 SSN" name="SSN" pattern=".{4,4}" required title="4 characters"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Username" name="signupusername" required></p>
        <p><input class="w3-input w3-border" type="password" placeholder="Password" name="NewPassword" required></p>
        <p><input class="w3-input w3-border" type="confirm password" placeholder="Confirm Password" name="ConfPassword" required></p>

        <button type="submit" class="w3-button w3-block w3-black">Sign Up</button>
      </form> 
     
</body>
</html>