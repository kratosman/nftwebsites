<?php

    session_start();
    session_destroy();
    header("location:register.php");

    $userid = $_SESSION['userid'];
    include 'config.php';
    $update = mysqli_query($conn, "UPDATE `user` SET `status`=0 WHERE `userid`='$userid'");
?>