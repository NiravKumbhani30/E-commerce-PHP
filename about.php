<?php
@include 'config.php';

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
    <title>about</title>

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
    <h1>about us</h1>
    <p> <a href="home.php">home >></a> about </p>
</div>

<section class="about">

    <div class="image">
        <img src="image/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>welcome to our Grocery shop</span>
        <h3>fresh and organic groceries</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis dicta, incidunt dolores nemo ex.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti aspernatur, ab tempora quisquam sapiente commodi hic.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<section class="gallery">

    <h1 class="title"> our <span>gallery</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/gallery-img-1.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-2.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

       
        <div class="box">
            <img src="image/gallery-img-3.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>
        
        <div class="box">
            <img src="image/gallery-img-4.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-5.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-6.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/gallery-img-7.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>


    </div>

</section>





    

<section class="credit">created by HIREN ROY | all rights reserved!</section>
<script src="js/grocery.js"></script>

</body>
</html>