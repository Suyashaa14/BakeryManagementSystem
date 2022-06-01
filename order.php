
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/order.css">
</head>
<body>


<?php
    

?>
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
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link active">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact Us</a>
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
     <!-- fOOD sEARCH Section Starts Here -->
     <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <?php 
            $sql = "select * from products where ProductId = ". $_REQUEST["ProductId"];
            include('connection.php');
            $r = mysqli_query($conn, $sql);
            $rs = mysqli_fetch_array($r);
            
            
            ?>
            <form action="#" class="order" method="post">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="product/<?php echo $rs["Img"]; ?>"  alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $rs["ProductName"]; ?></h3> 
                        <p class="food-price"><?php echo $rs["Price"]; ?></p>
                        <p class="food-description"><?php echo $rs["Description"]; ?></p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter your name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter your contact number" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Enter your email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="Enter your address" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" id="sbtn" value="Confirm Order" onclick="myfun1" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <script>
        function myfun1(){
            document.getElementById("sbtn")
        }
    </script>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php
        if(isset($_POST['submit'])){
            $proname=$rs["ProductName"];
            $quantity=$_POST['qty'];
            $cusname=$_POST['full-name'];
            $number=$_POST['contact'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $state="In Review";

            $insertquery = "INSERT INTO customerorder(OrderNo, ProductName, Quantity, CustomerName, CustomerNumber, CustomerEmail, CustomerAddress, OrderAction)
            VALUES ('','$proname','$quantity','$cusname','$number','$email','$address','$state')";
            $iquery = mysqli_query($conn, $insertquery);
            echo '<script>alert("Order successfully Registered")</script>';
        }
    ?>
</body>
</html>