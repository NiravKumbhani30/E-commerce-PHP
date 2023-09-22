
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/grocery.css">

</head>
<body>
    
<!-- header section starts  -->


<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-shopping-basket"></i> GROCERY SHOP  </a>


    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="shop.php">shop</a>
        <a href="about.php">about</a>
        <a href="review.php">review</a>
        <a href="blog.php">blog</a>
        <a href="contact.php">contact</a>
    </nav>
        

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
</form>
    
    <form action="login.php" class="login-form">
    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="btn">logout</a> 
    </form>

</header>

<!-- header section ends -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>grocery items</span>
                <h3>upto 20% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/4.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Oil</span>
                <h3>upto 50% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/cooking-oil.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>snacks</span>
                <h3>upto 15% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/snacks-branded-foods-20220519.jpeg" alt="">
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <span>Fruits and vagetable</span>
                <h3>upto 5% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/fv.jpeg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Home care</span>
                <h3>upto 10% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/home.jpeg" alt="">
            </div>
        </div>
    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>

        
    

<section class="banner-container">

    <div class="banner">
        <img src="image/banner-1.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>upto 40% off</h3>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-2.jpg" alt="">
        <div class="content">
            <span><b>limited sales</b></span>
            <h3>upto 15% off</h3>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/liq.jpg" alt="">
        <div class="content">
            <span><b>limited sales</b></span>
            <h3>upto 20% off</h3>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>

</section>





















<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="shop.php"> <i class="fas fa-arrow-right"></i> shop</a>
            <a href="blog.php"> <i class="fas fa-arrow-right"></i> blog</a>
            <a href="review.php"> <i class="fas fa-arrow-right"></i> review</a>
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact</a>
        
        </div>

       

       

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" placeholder="enter your email">
                <input type="submit" value="subscribe" class="btn">
            </form>
            
        </div>

    </div>

</section>

<section class="credit">created by PATEL BROTHERS | all rights reserved!</section>
<script src="js/grocery.js"></script>

</body>
</html>