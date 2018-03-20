<?php
include 'login.php';

if($emppwd == $row[0])
{
        session_start();
        $_SESSION['sid']=session_id();
        header("location:dashboard.php");
}
else
{
header("location:login.php");
}

?>