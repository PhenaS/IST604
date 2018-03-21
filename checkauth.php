<?php
include 'login.php';

if($emppwd == $row[0])
{
        session_start();
        $_SESSION['sid']=session_id();
        echo $row[0];
}
else
{
header("location:login.php");
}

?>
