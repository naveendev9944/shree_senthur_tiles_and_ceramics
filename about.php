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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <!-- <p> <a href="index.php">home</a> / about </p> -->
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We see our customers as partners. As such, we believe in developing relationships that build trust while engaging your imaginations. Your home is a big part of your life, and we take that idea seriously. So we inspire your creativity and build the personal connections you need to make you feel comfortable about transforming your living space into a showplace you can be proud of.</p>
         <p>World class design services are not as expensive as you may think. In fact, at The Tile Shop, they’re free. Our dedicated professionals are ready to discuss your tiling ideas and offer helpful suggestions about arrangement, materials and maintenance to help you create that dream room from start to finish.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Policies</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\policy\service-5.png" alt="">
         <h3>Easy Returns</h3>
         <p>Return any item before 15 days!</p>
      </div>

      <div class="box">
         <img src="images\policy\service-6.png" alt="">
         <h3>Free Shipping</h3>
         <p>Enjoy free shipping inside Erode</p>
      </div>

      <div class="box">
         <img src="images\policy\service-7.png" alt="">
         <h3>Fast Shipping</h3>
         <p>Items are shipped within 24 hours.

</p>
      </div>

      <div class="box">
         <img src="images\policy\service-8.png" alt="">
         <h3>Satisfaction Guarantee</h3>
         <p>We guarantee you with our quality satisfaction.</p>
      </div>

      <div class="box">
         <img src="images\policy\service-9.png" alt="">
         <h3>Secure Checkout</h3>
         <p>Providing Secure Checkout Options for all</p>
      </div>

      <div class="box">
         <img src="images\policy\service-10.png" alt="">
         <h3>Money Back Guarantee</h3>
         <p>Offer money back guarantee on our products</p>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">OUR TEAMS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Madhana Gopal</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Poorna Senthoor</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dinesh</h3>
      </div>

      
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>