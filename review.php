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
    <title>review</title>

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

     
    <form action="login_form.php" class="login-form">
    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="btn">logout</a> 
    </form> 
</header>

<!-- header section ends -->

<div class="heading">
    <h1>client's review</h1>
    <p> <a href="home.php">home >></a> review </p>
</div>

<section class="info-container">

    <div class="info">
        <img src="image/icon-1.png" alt="">
        <div class="content">
            <h3>fast delivery</h3>
            <span>within 30 minutes</span>
        </div>
    </div>

    <div class="info">
        <img src="image/icon-2.png" alt="">
        <div class="content">
            <h3>24 / 7 available</h3>
            <span>call us anytime</span>
        </div>
    </div>

    <div class="info">
        <img src="image/icon-3.png" alt="">
        <div class="content">
            <h3>easy payments</h3>
            <span>cash or credits</span>
        </div>
    </div>

</section>



<section class="review">

    <div class="box">
        <div class="user">
            <img src="image/pic-1.png" alt="">
            <div class="info">
                <h3>ryan john</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-2.png" alt="">
            <div class="info">
                <h3>shikha patel</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-3.png" alt="">
            <div class="info">
                <h3>steve smith</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-4.png" alt="">
            <div class="info">
                <h3>faf du</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-5.png" alt="">
            <div class="info">
                <h3>raj patel</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
    </div>

    <div class="box">
        <div class="user">
            <img src="image/pic-6.png" alt="">
            <div class="info">
                <h3> priyanshi bansal</h3>
                <span>happy client</span>
            </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem molestiae expedita culpa officiis harum impedit vel! Odit saepe similique vero!</p>
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
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms or use </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" placeholder="enter your email">
                <input type="submit" value="subscribe" class="btn">
            </form>
            <img src="image/payment.png" class="payment" alt="">
        </div>

    </div>

</section>

<section class="credit">created by HIREN ROY | all rights reserved!</section>

<!-- footer section ends -->













<!-- custom css file link  -->
<script src="js/grocery.js"></script>

</body>
</html>