<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contactus.css">

</head>
<body>
     <!-- header starts -->
     <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.php" class="logo">
                    <img src="./img/logo-rosa.png" alt="">
                    <!-- <h1 class="headline">The Fine Bakery</h1> -->
                </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="adminIndex.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-menu.php" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-contactus.php" class="nav-link active">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./addPro.php " class="nav-link">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="login-signup.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header ends -->

    <!-- hero starts -->


    <secion class="hero" id="hero">
        <div class="container">
            <video autoplay muted loop id="myVideo">
                <source src="./img/production ID_4114176.mp4" type="video/mp4">
            </video>
            <div class="contactus-content">
                <h2>Contact Us</h2>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, amet?</p>

                    <div class="contact-box">
                        <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"></i>  
                        </div>

                        <div class="text">
                             <h3>Address</h3>
                            <p>1234 Newroad, <br>Kathmandu, Nepal, <br>123456</p>
                        </div>
                    </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>

                    <div class="text">
                        <h3>Phone</h3>
                        <p>12345678</p>
                    </div>

                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>

                    <div class="text">
                    <h3>Email</h3>
                    <p>example@example.com </p>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="" method="post">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <label for="">Name</label><br>
                            <input type="text" name="name" required="required">
                        </div>
                        <div class="inputBox">
                            <label for="">Email</label><br>
                            <input type="text" name="email" required="required">
                        </div>
                        <div class="inputBox">
                            <label for="">Message here</label> <br>
                            <textarea class="contact-msg-field" name="message" required="required"></textarea>
                        </div>
                        <div class="inputBox">
                            <input type="submit" class="contactus-btn" name="submit" >
                        </div>
                    </form>
            </div>
        </div>
    </secion>

    
    <!-- hero ends -->
    <?php
        include('./connection.php');

        if(isset($_POST['submit'])){
            $username = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $insertquery = "INSERT INTO contactus(Username, Email, Messages)
        VALUES ('$username','$email','$message')";
        $iquery = mysqli_query($conn, $insertquery);
        if($iquery){
            ?>
            <script>
                alert("Connection Successful");
            </script>
            <?php
        } else{
            ?>
            <script>
                alert ("No Connection");
            </script>
            <?php
        }
        }
    ?>

    <script src="./js/main.js"></script>
</body>
</html>