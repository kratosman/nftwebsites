<?php

    if(isset($_POST['user'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $retype = $_POST['repass'];
        $str = password_hash($password, PASSWORD_DEFAULT);
        $strone = password_hash($retype, PASSWORD_DEFAULT);
        include 'config.php';
        if(trim($_POST['pass'])== '' && trim($_POST['repass']) == ''){
           echo 'all field are required';
        }else if ($_POST['pass'] != $_POST['repass']){
            echo 'password do not match';
        }else {
            echo 'asd';
            $query = mysqli_query($conn, "INSERT INTO `user`(`username`, `password`, `repassword`) VALUES ('$username', '$str', '$strone')");
        }
        
    }




?>