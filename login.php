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

<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>  
  
<body> 
  <div class="w3-row-padding">
    <h4>Solutions at Work Inc</h4>
    <p>SAW Staff Login</p>
      <form id="login" name="login" form action="checkauth.php" method="post">
        <p><input class="w3-input w3-border" type="text" placeholder="EmployeeID" name="EmployeeID" required></p>
        <p><input class="w3-input w3-border" type="password" placeholder="Password" name="Password" required></p>
        <button type="submit" class="w3-button w3-block w3-black">Submit</button>
      </form> 
  </div>   
</body>
</html>
