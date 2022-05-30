<?php

    include 'config.php';

    $select = "SELECT * FROM `cardcreation` LEFT JOIN `user` ON `cardcreation`.`userid` = `user`.`userid` ";
    $query = mysqli_query($conn, $select);

    if($query){
        while ($row = mysqli_fetch_assoc($query)){
            session_start();
            $deleteId = $_SESSION['userid'];
            
           if($row['getUserid'] === $deleteId){
            $userid = $_GET['id'];
            $sql = mysqli_query($conn, ("DELETE FROM `cardcreation` WHERE `userid`='$userid'"));
                header("Location:welcome.php");
           }else {
                echo 'You cant delete';  
           }
        }    
    }else {
        echo "can't delete";
    }
    

?>