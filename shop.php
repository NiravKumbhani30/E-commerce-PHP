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
    <title>shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/grocery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    

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
        <input type="search" placeholder="search here..." id="search-box" >
        
        <a href="search_page.php">search</a>
        <label for="search-box" class="fas fa-search"></label>
    </form>

      <div class="shopping-cart">
      <a href="cart.php" class="btn">cart</a>
       <div class="box">
       <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>      
    </div>
    <div class="icons">
    <form action="login.php" class="login-form">
    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
    <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
    <a href="logout.php" class="btn">logout</a> 
    </form>
</div>
</header>

<div class="heading">
    <h1>our shop</h1>
    <p> <a href="home.php">home >></a> shop </p>
</div>
<img src="image/hd.jpg"  alt="">
        
<section class="category">

    <h1 class="title"> our <span>category</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <a href="#" class="box">
            <img src="image/cat-1.png" alt="">
            <h3>fresh fruits</h3>
        </a>

        <a href="#" class="box">
            <img src="image/cat-2.png" alt="">
            <h3>vegetables</h3>
        </a>

        <a href="#" class="box">
            <img src="image/cat-3.png" alt="">
            <h3>organic spices</h3>
        </a>

        <a href="#" class="box">
            <img src="image/cat-4.png" alt="">
            <h3>fresh meat</h3>
        </a>

        <a href="#" class="box">
            <img src="image/cat-5.png" alt="">
            <h3>organic wheat</h3>
        </a>

    </div>

 </section>
 


<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] =  'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
    
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


 <div class="container">

<section class="products">  

   <h1 class="heading">latest products</h1>

    <div class="box-container"> 

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

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
<script src="js/grocery.js"></script>
</body>
</html>