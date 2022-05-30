<?php

    session_start();
    if(isset($_SESSION['userid'])){
        $id = $_SESSION['userid'];
    }else {
        header("location: register.php");
        session_destroy();
    }

?>
<?php
    include 'config.php';
    
    $sql = "SELECT * FROM `user` WHERE userid='".$_SESSION['userid']."'";
    $total = mysqli_query($conn, $sql);
    
?>
<?php
    include 'config.php';
    
    $sql = "SELECT * FROM `userprofile`";
    $asd = mysqli_query($conn, $sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/welcome.css">
    <link rel="stylesheet" href="./dist/css/profile.css">
    <title>Document</title>
</head>
<body>
         <div class="container-fluid">
             <div class="wrapper">
                <aside class="side-bar">
                       <div class="side-bar-d-flex">
                       <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M186.5 293c0 19.3-14 25.4-31.2 25.4h-45.1v-52.9h46c18.6.1 30.3 7.8 30.3 27.5zm-7.7-82.3c0-17.7-13.7-21.9-28.9-21.9h-39.6v44.8H153c15.1 0 25.8-6.6 25.8-22.9zm132.3 23.2c-18.3 0-30.5 11.4-31.7 29.7h62.2c-1.7-18.5-11.3-29.7-30.5-29.7zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zM271.7 185h77.8v-18.9h-77.8V185zm-43 110.3c0-24.1-11.4-44.9-35-51.6 17.2-8.2 26.2-17.7 26.2-37 0-38.2-28.5-47.5-61.4-47.5H68v192h93.1c34.9-.2 67.6-16.9 67.6-55.9zM380 280.5c0-41.1-24.1-75.4-67.6-75.4-42.4 0-71.1 31.8-71.1 73.6 0 43.3 27.3 73 71.1 73 33.2 0 54.7-14.9 65.1-46.8h-33.7c-3.7 11.9-18.6 18.1-30.2 18.1-22.4 0-34.1-13.1-34.1-35.3h100.2c.1-2.3.3-4.8.3-7.2z"/></svg>
                            <span>Benjie</span>
                        </div>
                        <div class="link-pages">
                            <ul>
                                <li>
                               <a href="dashboard.php">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
</svg>
                                    <span>Dashboard</span>
                               </a>
                                </li>
                                <li>
                                <a href="profile.php">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
</svg>
                                    <span>Profile</span>
</a>
                                </li>
                                <li>
                                    <a href="welcome.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                          </svg>
                                                                              <span>Marketplace</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                       </div>
                        <div class="logout-system">
                            <ul>
                                <a href="logout.php">
                                <svg width="20" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg>
                                    <span>Logout</span>
                                </a>
                            </ul>
                        </div>
                </aside>
                 <section class="main">
                        <nav class="navbar">
                            <div class="d-flex-col">
                                <div class="menu-btn-trigger menu">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 448 512"><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>
                                </div>
                                <div class="search-bar">
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                                    <input type="text" placeholder="Search...">
                                </div>
                                <div class="language-system">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                                                                                                </svg>
                                                                                                                <span>Language</span>
                                </div>
                            </div>
                            <div class="user-profile">
                                    <div class="notification">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 448 512"><path d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z"/></svg>
                                    </div>
                                 <a href="profile.php" class="profile-link">
                                 <div class="user-profile-image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 512 512"><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"/></svg>
                                    </div>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($total)){

                                        
                                    
                                    ?>
                                    <span>
                                        <?php
                                            echo $row['username'];
                                        ?>
                                    </span>
                                    <?php
                                        }
                                    ?>
                                 </a>
                            </div>  
                        </nav>

                        <!-- ARTICLES -->
                        <?php
                            include 'config.php';
                            
                            $sql = "SELECT * FROM `user` WHERE userid='".$_SESSION['userid']."'";
                            $total = mysqli_query($conn, $sql);
                            $cver = "SELECT * FROM `userprofile` WHERE userid='".$_SESSION['userid']."'";
                            $dataCver = mysqli_query($conn, $cver);
                            
                        ?>
                            <article class="articles-section">
                             
                                <div class="cover-photo">
                                <div class="edit-profile">
                                        <svg width="20" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <span>Edit profile</span>
                                    </div>
                                <?php
                                    while ($row = mysqli_fetch_assoc($dataCver)){
                                ?>
                                        <?php
                                            echo "<img  src='./dist/coverphoto/".$row['cover_photo']."' style='object-fit: cover' width='100%' height='100%' alt=''>";
                                        ?>
                                    
                                  
                                    <div class="profile-photo">
                                    <?php
                                            echo "<img  src='./dist/uploaded/".$row['profile_photo']."' style='object-fit: cover' width='100%' height='100%' alt=''>";
                                        ?>
                                    </div>
                                    
                                    <?php
                                    }
                                ?>
                                </div>
                               
                                <div class="biodata-of-a-user">
                                    <?php
                                        while($row = mysqli_fetch_assoc($total)){
                                    ?>
                                    <div class="name">
                                        <?php
                                            echo $row ['username'];
                                        ?>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                            include 'config.php';
                                            
                                            $sql = "SELECT * FROM `userprofile` WHERE userid='".$_SESSION['userid']."' LIMIT 1";
                                            $totalS = mysqli_query($conn, $sql);
                                            
                                        ?>
                                    <div class="bio-data-txt">
                                        <?php
                                            while ($row = mysqli_fetch_assoc($totalS)){
                                        ?>
                                        <span>
                                                <?php
                                                    echo $row['bio'];
                                                ?>
                                                
                                        </span>
                                        
                                        <?php
                                            }
                                        ?>
                                       
                                        <div class="link-of-user">
                                        <?php
                                            include 'config.php';
                                            
                                            $sql = "SELECT * FROM `userprofile` WHERE userid='".$_SESSION['userid']."'";
                                            $total = mysqli_query($conn, $sql);
                                            
                                        ?>
                                            <div class="twitter">
                                          
                                            <?php
                                            while ($row = mysqli_fetch_assoc($total)){
                                        ?>
                                               <a href="<?php echo $row['twitter'] ?>">
                                           
                                      
                                           <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                              
                                        </a>
                                      
                                            
                                            </div>
                                            <div class="instagram">
                                                <a href="<?php echo $row['instagram'] ?>">
                                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                                </a>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                        ?>  
                                    </div>
                                    <div class="card-container">
                                        <div class="creation">
                                            <h1>creation</h1>
                                        </div>
                                        <div class="card-flex-container">
                                            <div class="card-box">
                                            <div class="card-market-area">
                                    <!-- .CARD-IS-HERE -->
                                    <?php
                                        include 'config.php';
                                        
                                        $selectRecord = "SELECT * FROM  `cardcreation` WHERE `getUserid`='".$_SESSION['userid']."'";
                                        $dataRecord = mysqli_query($conn, $selectRecord);
                                    ?>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($dataRecord)){
                                    ?>
                                    <div class="car-flex">
                                       <div class="card-top-header">
                                        <span class="name">
                                            <?php
                                                echo $row['name'];
                                            ?>
                                        </span>
                                        <svg data-id="<?php echo $row['userid'];?>" data-toggle="modal-card-flex-desc" data-target="#modal-card-flex-desc" class="trigger-btn-dots" width="20" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                              </svg>
                                       </div>
                                       <div class="center-mid-body">
                                            <?php
                                                // $image = $row['image'];
                                                echo "<img src='./dist/uploaded/".$row['image']."' class='image-marketplace' style='object-fit: cover; user-select: none; width:100%; height:100%;'  />";
                                            ?>
                                            
                                       </div>
                                       <div class="footer-bottom-end">
                                           <div class="price-tag">
                                               <span class="text-price">
                                                <?php
                                                    echo $row['salesprice'];
                                                ?>    
                                               <p>TOKENS</p></span>
                                           </div>
                                           <button class="btn-bid-now">Bid now</button>
                                       </div>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                                    <!-- .CARD-IS-HERE -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </article>
                        <!-- ARTICLES -->
                 </section>
             </div>
         </div>

         <div class="modal-profile-editor" id="myProfileShow">
             <div class="modal-profile-editor-contents">
                 <form action="bio-profile.php" method="post" enctype="multipart/form-data">
                     <div class="header-text">
                         <h1><strong>Edit Profile</strong></h1>
                     </div>
                        <div class="cover-photo-modal">
                            <input class="cover-file" type="file" name="uploadtofile" id="uploadtofile">
                            <div class="profile-image">
                                <input class="profile-image-file" name="uploadtofileprofile" id="uploadtofileprofile" type="file">
                            </div>
                        </div>
                        <div class="bio">
                            <span>bio</span>
                            
                            <input type="hidden" name="" value="<?php echo $_SESSION['userid']; ?>" id="id">
                           
                            <textarea name="bio-text" id="bio-text"  cols="30" rows="10" placeholder="Type something" ></textarea>
                        </div>
                        <div class="link">

                            <div class="instagram">
                                <label for="">Instagram</label>
                                <input type="text" name="link-of-instagram" id="link-instagram">
                            </div>
                            <div class="twitter">
                                <label for="">Twitter</label>
                                <input type="text" name="link-of-twitter" id="link-twitter">
                            </div>
                            <div class="btn-area-modal">
                                <button class="save" id="save" name="save">Save</button>
                                <button class="cancel">Cancel</button>
                            </div>
                        </div>
                 </form>
             </div>
             
         </div>
              <!-- IMAGE-MODAL-HERE CARD-FLEX -->
         <?php
         include 'config.php';
             $userid = $_SESSION['userid'];
             $sql = "SELECT * FROM `cardcreation`";
             $data = mysqli_query($conn, $sql);
         ?>
         <?php
          foreach($data as $row){
         ?>
         <div>
         <div class="modal-card-flex-desc" id="modal-card-flex-desc" style="display:none;">
                <?php
                  echo  $row['getUserid'];
                ?>
            </div>
            <?php
            }
            ?>
         </div>
         
          <!-- IMAGE-MODAL-HERE CARD-FLEX -->

    


       
</body>
<script>
    var show = document.getElementById("myProfileShow");
    var trigger = document.querySelector(".edit-profile");
    trigger.addEventListener('click', () => {
        show.style.display = "block";
    })
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $('.trigger-btn-dots').click(function() {
       var ids = $(this).data('id');
     
        console.log(ids);
        $.ajax({
            url:'modal-views.php',
            type:'POST',
            data:{id :ids},
            success:function(data){
                $('#modal-card-flex-desc').html(data);
                $('#modal-card-flex-desc').css('display','block');
                $('.cancel-card-flex-listing').click(function() {
                    $('#modal-card-flex-desc').css('display','none');
                });
            }
        });
    });

</script>

</html>