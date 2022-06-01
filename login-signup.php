<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/35228e59cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="./login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="iusername" placeholder="Username" required value="<?php

                         if(isset($_COOKIE['usernamecookie'])){
                             
                            echo $_COOKIE["usernamecookie"]; }  
                         
                         ?>" >
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="ipassword"placeholder="Password" required value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE["passwordcookie"]; }  ?>">
                    </div>
                    <div >
                        <input type="checkbox" name="rememberme"> Remember me
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn solid">
                    <p class="social-text">Or sign in with social platforms</p>
                    <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                </form>
                <script>
                    function validate(){
                        let spassword = document.getElementByName("spassword");
                        let srepassword = document.getElementByName("srepassword");
                        if(spassword!=srepassword){
                            alert("Password doesnt match with repassword");
                        }
                    }
                </script>
                <form action="./sigin.php" method="post" class="sign-up-form" onsubmit="return validate()">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="susername" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="semail"  placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="spassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="srepassword" placeholder="Re-Password" required>
                    </div>
                    <input type="submit" name="submit" value="Sign Up" class="btn solid">
                    <p class="social-text">Or Sign Up with social platforms</p>
                    <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, qui.</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img/delivery.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, qui.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>