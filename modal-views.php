<?php


  
    if(isset($_POST['id'])){
    $userid = $_POST['id'];
    include 'config.php';
    $sql = "SELECT * FROM `cardcreation` WHERE `userid`='$userid'";
    $data = mysqli_query($conn, $sql);

?>
<?php



    include 'config.php';
    session_start();

    $sqla = "SELECT * FROM `user`";
    $dataOne = mysqli_query($conn, $sqla);
    foreach($dataOne as $rowNum){
        
?>
<?php
    while($row = mysqli_fetch_assoc($data)){

            if(isset($_SESSION['view'])){
                $_SESSION['view'] = $_SESSION['view']+1;
            }else {
                $_SESSION['view']=1;
            }
            
            // if(isset($_SESSION['userid'])){
            //     $_SESSION['userid'] = $row['getUserid'];
            // }

          
                echo ' <div class="content-card-flex-desc">
                <div class="card-flex-images-left">
                        <img src="./dist/uploaded/'.$row['image'].'"  style="object-fit: cover; user-select: none; width:100%; height:100%;" alt="" />        
                </div>
                <div class="card-flex-desc-right">
                    <div class="name-of-card-flex-user-given">
                        <h1><strong>'.$row['name'].'</strong></h1>
                    </div>
                    <a href="profile.php">'.$rowNum['username'].'</a>
                    <strong>DESCRIPTION</strong>
                    <div class="desc-user-given">
                        
                        <p>'.$row['descriptions'].'</p>
                    </div>
                    <div class="add-to-cart-user">
                        <div class="views-count">
                            <span>'.$_SESSION['view'].' <p>Views</p> </span>
                        </div>
                    </div>
                    <div class="remove-listing">
                        <a href="delete.php?id='.$row['userid'].'" class="delete"  name="remove-card-flex-listing">
                        
                        Remove listing</a>
                        <button name="cancel-card-flex-listing" class="cancel-card-flex-listing">Cancel</button>
                    </div>
                </div>
            </div>';
            
           

            }

    ?>
<?php
    }
?>

<?php
    }
?>
