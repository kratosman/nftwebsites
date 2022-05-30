<?php
 if(isset($_POST['twitters']) || isset($_POST['instas'])){
     $twitter = $_POST['twitters'];
     $insta = $_POST['instas'];
     include 'config.php';
     session_start();
     $query = mysqli_query($conn, "INSERT INTO `userprofile`(instagram, twitter,userid) VALUES ('$insta', '$twitter','".$_SESSION['userid']."')");
 
    if($query){
        echo 'hello';
    }
 
  }
?>