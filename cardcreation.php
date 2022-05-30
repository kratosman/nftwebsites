<?php
if(isset($_POST['create-card'])){
    $name = $_POST['name'];
    $desc = $_POST['desc-card'];
    $descType = addslashes($desc);
    $salePrice = $_POST['price'];
    include 'config.php';
    session_start();
    $filename = $_FILES['uploadtofile']['name'];
    $tempname = $_FILES['uploadtofile']['tmp_name'];
    $filepath = "./dist/uploaded/".$filename;

    $query = mysqli_query($conn, "INSERT INTO `cardcreation`(`name`, `descriptions`, `salesprice`,`getUserid`,`image`) VALUES ('$name','$descType','$salePrice','".$_SESSION['userid']."','$filename')");
    if(move_uploaded_file($tempname,$filepath)){
        echo 'Image was uploaded';
        header("location:welcome.php");
    }
}

?>
