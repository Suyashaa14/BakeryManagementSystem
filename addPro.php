<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/addproduct.css">
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
                <a href="adminIndex.php" class="logo">
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
                        <a href="addpro.php" class="nav-link active">Admin</a>
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
    

    <!-- hero ends -->

    <section class="hero menu" id="hero">
        <div class="addproduct-container">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="" class="product-tag">ProductName</label><br>
                <input type="text" name="ProductName"><br>
                <label for="" class="product-tag">ProductImage</label><br>
                <input type="file" name="ProductImage"><br>
                <label for="" class="product-tag">Price</label><br>
                <input type="text" name="Price"><br>
                <label for="" class="product-tag">Description</label> <br>
                <input type="text" name="description"> <br>
                <input type="submit" name="Submit"><br>
            </form>
        </div>
        
    </section>
    <?php
    if(isset($_POST['Submit'])){
        include('connection.php');
        // if(isset($_POST['Submit'])){
            $ProductName = $_POST['ProductName'];            
            $Price = $_POST['Price'];
            $prodescription = $_POST['description'];
            $filename = rand(1000,9999).$_FILES['ProductImage']['name'];
            $filetemp = $_FILES['ProductImage']['tmp_name'];
            $folder = 'product/'.$filename;
            move_uploaded_file($filetemp,$folder);

            ?>
            <script>
        
                alert ("Successfully insert");
            </script>
<?php

            $sql = "INSERT INTO products(ProductName, Img, Price, Description )
            VALUES ('$ProductName','$filename','$Price','$prodescription')";
            $r = mysqli_query($conn,$sql);
         }

     
    
    ?>


    <!-- hero ends -->



    <!-- order list starts -->

    <section class="Order-list">
        <div class="container">
            <h1 class="text-center heading">Order List</h1>

            <?php 
            $sql = "select * from customerorder";
            include('connection.php');
            $r = mysqli_query($conn, $sql);
            while ($rs = mysqli_fetch_array($r))
            {
            
            ?>

            <div class="Food-order-box">
                
                <div class="food-order-desc">
                    <div class="des"><h4><?php echo $rs["ProductName"]; ?></h4> </div>
                    <div class="des"><h4><?php echo $rs["CustomerName"]; ?></h4></div>
                    <div class="des"><h4><?php echo $rs["CustomerNumber"]; ?></h4></div>
                    <div class="des edes"><h4><?php echo $rs["CustomerEmail"]; ?></h4></div>
                    <div class="des"><h4><?php echo $rs["CustomerAddress"]; ?></h4></div>

                    <div class="des">
                        <form action="#" method="POST">
                        <input type="submit" name="review-submit" value="<?php echo $rs["OrderAction"]; ?>" class="btn-food-review"> 
                        </form>
                    </div>
                   
                </div>
            </div>
            <?php
            }
            ?>
            <?php
                
                if(isset($_POST['review-submit'])){
                    $changesql = 'UPDATE customerorder SET OrderAction=\'Completed\' WHERE OrderNo=\'$rs["OrderNo"]\'  ';
                    var_dump($changesql);
                    $ar = mysqli_query($conn,$changesql);
                }
            ?>            

        </div>
    </section>

    <!-- order list ends -->

    <!-- user messages start -->
    <div class="review-field">
    <H1>Feedback and Review</H1> <br>
    <?php 
            $sql = "select * from contactus";
            include('connection.php');
            $r = mysqli_query($conn, $sql);
            while ($rs = mysqli_fetch_array($r))
            {     
        ?>
        <div class="usermessage" style="text-align:left">
        <div class="name"><?php echo $rs["Username"]; ?></div>
        <div class="email"><?php echo $rs["Email"]; ?></div>
        <div class="message"><?php echo $rs["Messages"]; ?></div>
        </div>
                <?php
            }
            ?>
    
    </div>
    <footer>
        <div class="container">
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