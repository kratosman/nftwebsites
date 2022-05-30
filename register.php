
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/register.css">
    <link rel="stylesheet" href="./all.css">
    <title>Document</title>
</head>
<body>
        <div class="links">
            <ul>
                <li>
                    <a href="">
                        <img src="./dist/images/github-icon.svg" width="35" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./dist/images/codepen.svg" width="35" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./dist/images/instagram.svg" width="35" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./dist/images/facebook.svg" width="35" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <form>
            <div class="container-register-field">
                <div class="d-flex-col">
                    <!-- image area -->
                    <div class="image-area">
                        <span>Explore the world of NFT.</span>
                        <img src="./dist/images/undraw_shopping_re_hdd9.svg" alt="">
                    </div>
                    <!-- image area -->
                    <!-- LOGIN SESSION -->
                    <div class="login-session">
                        <h1>SIGNUP</h1>
                        <div class="login-field-area">
                            <label for="">Username</label>
                            <div class="username">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" name="username" id="username" >
                            </div>
                            <label for="">Password</label>
                            <div class="password">
                                <i class="fa-solid fa-key"></i>
                                <input type="password" name="password" id="password">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-eye-slash" style="display: none;"></i>
                            </div>
                            <label for="">Re-type Password</label>
                            <div class="re-password">
                                <i class="fa-solid fa-key"></i>
                                <input type="password" name="retype" id="retype">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-eye-slash" style="display: none;"></i>
                            </div>
                        </div>
                     
                        <button class="btn-create-account" name="btn-create-account" id="btn-create-account">Create account</button>
                        <span>You have already an account <span class="login-text">Login</span></span>
                    </div>
                    <!-- LOGIN SESSION -->
                </div>
            </div>
        </form>
      
        <?php
    include 'config.php';
    require 'login-data.php';
    session_start();
    if(isset($_SESSION['userid'])){
        header("location: welcome.php");
    }


?>

        <div class="modal" id="modal">
            <div class="modal-content">
              <form action="" method="post">
              <div class="modal-header">
                    <div class="div" role="none"></div>
                    <h1>SIGN IN</h1>
                    <span class="btn-close">&times;</span>
                </div>
                <div class="modal-body-login-field">
                    <input type="text" id="login-username" name="login-user" placeholder="Username">
                    <input type="password" id="login-password" name="login-pass" placeholder="Password">
                </div>
                <div class="modal-footer">
                    <button name="btn-login" id="btn-login">Login</button>
                    <button name="btn-cancel" id="btn-cancel">Cancel</button>
                </div>
              </form>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#btn-create-account').click(function() {
        var user = $("#username").val();
        var pass = $("#password").val();
        var repass = $("#retype").val();
        if(user == ""){
            alert("username");
        }else if (pass == "") {
            alert("password");
        }else if (repass == ""){
            alert("repass");
        }else {
            $.ajax({
                url:'register_data.php',
                method:'POST',
                data:{
                    user:user,
                    pass:pass,
                    repass:repass
                },
                success:function(response){
                    alert("ASd");
                }
            })
        }
    });
</script>
<script>
    var login = document.querySelector(".login-text");
    var close = document.querySelector(".btn-close");
    var modal = document.getElementById("modal");
    console.log(close);
    login.addEventListener('click', () => {
        modal.style.display = "block";
    })
    close.addEventListener('click', () => {
        modal.style.display = "none";
    });

</script>

</html>