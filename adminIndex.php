<?php
    session_start();

    if(!isset($_SESSION['username'])){
        echo "You are logged out";
        header('location:login-signup.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" href="./css/style.css">
</head >
<body>
    
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="adminIndex.php" class="logo">
                    <img src="./img/logo-rosa.png" alt="">
                    <!-- <h1 class="headline">The Fine Bakery</h1> -->
                </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="adminIndex.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-menu.php" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="./addPro.php " class="nav-link">Admin</a>
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
                <source src="./img/video (5).mp4" type="video/mp4">
            </video>
            <h2 class="sub-headline">
                <span class="first-letter">W</span>elcome
            </h2>
            <h1 class="headline">Fine Bakery</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Ready to be opened</h5>
                    <a href="#discoverourmenu" class="btn cta-btn explore-btn">Explore</a>
                </div>
            </div>
        </div>
    </secion>
    <!-- hero ends -->

<section class="discover-our-story">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">D</span>iscover
                    </h2>
                    <h1 class="headline headline-dark">Our Story</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis ipsam, hasdas a  blanditiis consequatur modi fugit natus quidem quia. Quae modi voluptate cumque facilis necessitatibus suscipit quas distinctio fuga incidunt inventore!</p>
                <!-- <a href="#" class="btn body-btn">About Us</a> -->
            </div>
            <div class="restaurant-info-img animate-right">
                <img src="./img/mae.jpg" alt="" class="restaurant-info-image">
            </div>
        </div>
    </div>
</section>
<!-- discovery ends -->

<section class="tasteful-recipies between">
<div class="container">
    <div class="global-headline">
        <div class="animate-top">
            <h2 class="sub-headline">
                <span class="first-letter">T</span>asteful
            </h2>
        </div>
        <div class="animate-bottom">
            <h1 class="headline">Recipes</h1>
        </div>
    </div>
</div>
</section>

<!-- Tasteful recipes ends -->

<section class="discover-our-menu" id="discoverourmenu">
    <div class="container">
        <div class="restaurant info">
            <div class="image-group padding-right animate-left">
                <img src="./img/pastry1.jpg" alt="" class="discovery-images">
                <!-- <div class="overlay">Cake Designs</div> -->
                <img src="./img/pastry2.jpg" alt="" class="discovery-images">
                <!-- <div class="overlay">Cake Designs</div> -->
                <img src="./img/pastry3.jpg" alt="" class="discovery-images">
                <!-- <div class="overlay">Cake Designs</div> -->
                <img src="./img/pastry4.jpg" alt="" class="discovery-images">
                <!-- <div class="overlay">Cake Designs</div> -->
            </div>
            <div class="restaurant-description animate-right">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">D</span>iscover
                    </h2>
                    <h1 class="headline headline-dark">Menu</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi maxime aliquam quis nulla esse error! Nam dolor ullam aliquam adipisci tenetur odio sint dolores a corrupti in atque, autem porro?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolores debitis quas expedita cupiditate iure ut odio corrupti in dolor earum accusantium, illum, voluptate provident quos quidem, error labore quia.</p>
                    <a href="admin-menu.php" class="btn body-btn discovery-btn">View Full Menu</a>
                
            </div>
        </div>
    </div>
</section>


<!-- Discover our menu ends -->


<section class="perfect-blend between">
<div class="container">
    <div class="global-headline">
        <div class="animate-top">
            <h2 class="sub-headline tasteful-headline">
                <span class="first-letter">T</span>he Perfect
            </h2>
        </div>
        <div class="animate-bottom">
            <h1 class="headline ">Blend</h1>
        </div>
    </div>
</div>
</section>

<!-- perfect blend ends -->
 <section class="culinary-delight">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">C</span>ulinary
                    </h2>
                    <h1 class="headline headline-dark">Delight</h1>
                    <div class="asterisk">
                        <i class="fas fa-asterisk"></i>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nobis ipsam, hasdas a  blanditiis consequatur modi fugit natus quidem quia. Quae modi voluptate cumque facilis necessitatibus suscipit quas distinctio fuga incidunt inventore!</p>
                <!-- <a href="#" class="btn body-btn">Make a Reservation</a> -->
            </div>
            <div class="image-group">
                <img  class="animate-top" src="./img/culinary.jpg" alt="">
                <img class="animate-bottom" src="./img/coffee.jpg" alt="">
            </div>
        </div>
    </div>
 </section>
<!-- culinary delight -->

<footer>
    <div class="conteiner">
        <div class="back-to-top">
            <a href="#hero"><i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="footer-content">
            <div class="footer-content-about animate-top">
                <h4>About Fine Bakery</h4>
                <div class="asterisk">
                    <i class="fas fa-asterisk"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit eaque accusantium quidem corrupti dolores dicta similique voluptate aperiam, illo a quos nihil rerum ab porro maxime sequi ipsa quaerat quod!</p>

            </div>
            <div class="footer-content-divider animate-bottom">
                <div class="social-media ">
                <h4>Follow Along</h4>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                </ul>
            </div>
            <div class="newsletter-container">
                <h4>Newsletter</h4>
                <form action="#" class="newsletter-form">
                    <input type="text" class="newsletter-input" placeholder="Your email address. . .">
                    <button class="newsletter-btn" type="submit">
                        <i class="fas fa-envelope"></i>
                    </button>
                </form>
            </div>
            </div>
        </div>
    </div>
</footer>
<script src="./js/main.js"></script>
</body>
</html>