<?php
   if(isset($_POST['btn-login'])){
       $user = $_POST['login-user'];
       $pass = $_POST['login-pass'];

       include 'config.php';
       $selectRecord = mysqli_query($conn, "SELECT * FROM user WHERE `username`='$user'");
       if(mysqli_num_rows($selectRecord) > 0) {
           while ($row = mysqli_fetch_assoc($selectRecord)) {
             if(password_verify($pass, $row['password'])){
                 $update = "UPDATE `user` SET `status`=1 WHERE `username`='$user'";
                 $updateStatus = mysqli_query($conn, $update);
                 if($updateStatus){
                    echo 'login successful';
                    header("location:welcome.php");
                    session_start();
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['userlogin'] = true;
                    
                 }
             }
           }
       }else {
           echo '0 results';
       }
   }
?>