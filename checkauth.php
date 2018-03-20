<?php
    include 'login.php';

    if(empty($emppwd))
    {
    echo "Please enter your ID and password";
    }elseif($emppwd == $row[0]){
    header("Location: dashboard.php");
    }
    else
    {
    echo "Incorrect ID or password";    
    }
?>