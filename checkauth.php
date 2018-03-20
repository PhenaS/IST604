<?php
    include 'login.php';

    if($emppwd == $row[0]){
    header("Location: dashboard.php");
    }
    else
    {
    echo "Incorrect ID or password";    
    }
?>