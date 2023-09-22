<?php
@include 'config.php';


session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}



?>




<!DOCTYPE html>
<html lang="guj">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <h1>contact us</h1>
    <p> <a href="home.php">home >></a> contact </p>
</div>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+1-7654637948</p>
            <p>+91-9897678656</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>GadhiyaInfoTech@gmail.com</p>
            <p>Savangadhiya@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>SURAT,GUJARAT INDIA - 395065</p>
        </div>

    </div>

    <div class="row">

        <form action="" method="POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="hidden" name="id">
                <input type="text" placeholder="enter your name" name="name" class="box">
                <input type="email" placeholder="enter your email"  name="email" class="box">
            </div>
            <div class="inputBox">
                <input type="number"  name="num" placeholder="enter your number" class="box">
                <input type="text"  name="sub" placeholder="enter your subject" class="box">
            </div>
            <textarea placeholder="your message" name="mes" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="submit" class="btn">
        </form>


    </div>
    </section>
    
<?php
if(isset($_POST['submit'])){
 
$name=($_POST['name']);
$email=($_POST['email']);
$num=($_POST['num']);
$sub=($_POST['sub']);
$mes=($_POST['mes']);

$q="INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `subject`, `mess`) VALUES (NULL, '', '$name', '$email', '$num', '$sub', '$mes')";

if(mysqli_query($conn,$q)){
    echo "inserted";
}
else{
    echo "error";
}
}
if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $dq="DELETE FROM `message` WHERE id='$id'";
    if(mysqli_query($conn,$dq)){
        echo "record deleted";
    }
    else
    {
        echo "delete fail".mysqli_error($conn);
    }
}
?>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
        
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

<section class="credit">created by HIREN ROY | all rights reserved!®</section>

<!-- footer section ends -->
<script src="js/grocery.js"></script>

</body>
</html>