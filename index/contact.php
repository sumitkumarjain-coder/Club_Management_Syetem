<?php

include '../config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> club house </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="clubs.php">clubs</a>
      <a href="contact.php">contact</a>
   </nav>

   <div class="icons">
   <div id="account-btn" class="fas fa-user" onclick="document.location='../user_page.php'"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>


<!-- account form section ends -->

<!-- header section ends -->

<section class="heading-link">
   <h3>contact us</h3>
   <p> <a href="home.php">home</a> / contact </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> get in touch </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>00:07am to 00:06pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         <p>Sumit_Original@gmail.com</p>
         <p>Sumit_Duplicate@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         <p>rajasthan, india - 400104</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.png" alt="">
      </div>

    
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq">

   <h1 class="heading">frequently asked questions</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>how to contact for help?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>how it impact my career?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>how much time should we spent?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I choose which club to join?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>what are the facilities i get?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I join multiple clubs?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-2.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-3.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-4.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/partner-logo-5.png" alt=""> </div>
      </div>
   </div>
</section>

<!-- logo slider ends -->







<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fas fa-lightbulb"></i> club house </h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, voluptatem.</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php" class="link">home</a>
         <a href="about.php" class="link">about</a>
         <a href="clubs.php" class="link">clubs</a>
         <a href="contact.php" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>

   <div class="credit"> created by <span>Sumit</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>