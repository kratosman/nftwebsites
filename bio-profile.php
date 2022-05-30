<?php
    if(isset($_POST['save'])){
        $bio = $_POST['bio-text'];
        $biolongtext = addslashes($bio);
        $instagram = $_POST['link-of-instagram'];
        $twitter = $_POST['link-of-twitter'];


        $filename = $_FILES['uploadtofile']['name'];
        $filenameprofile = $_FILES['uploadtofileprofile']['name'];
        $tempname = $_FILES['uploadtofile']['tmp_name'];
        $tempnameprofile = $_FILES['uploadtofileprofile']['tmp_name'];
        $filepath = "./dist/coverphoto/".$_FILES['uploadtofile']['name'];
        $filepathprofile = "./dist/uploaded/".$_FILES['uploadtofileprofile']['name'];
        include 'config.php';

        
        session_start();
        $query = mysqli_query($conn, "INSERT INTO `userprofile`(`bio`, `userid`, `instagram`,`twitter`,`cover_photo`,`profile_photo`) 
        VALUES ('$biolongtext','".$_SESSION['userid']."','$instagram', '$twitter','$filename','$filenameprofile')");
         if(move_uploaded_file($tempname, $filepath)){
            header("location:profile.php");
        }
               
        if(move_uploaded_file($tempnameprofile, $filepathprofile)){
            header("location:profile.php");
        }
    }

    header("location:profile.php");
?>