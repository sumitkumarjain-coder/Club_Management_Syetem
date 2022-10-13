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
   <title>home</title>

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



<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/homeslide1.jpg) no-repeat;">
            <div class="content">
               <h3>the best clubs you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/homeslide2.jpg) no-repeat;">
            <div class="content">
               <h3>the best clubs you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/homeslide3.jpg) no-repeat;">
            <div class="content">
               <h3>the best clubs you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               
            </div>
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading">our clubs</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/subject-icon-1.png" alt="">
         <h3>graphic design club</h3>
         
      </div>

      <div class="box">
         <img src="images/subject-icon-2.png" alt="">
         <h3>aptinues club</h3>
         
      </div>

      <div class="box">
         <img src="images/subject-icon-3.png" alt="">
         <h3>helping hand club</h3>
         
      </div>

      <div class="box">
         <img src="images/subject-icon-4.png" alt="">
         <h3>coading club</h3>
         
      </div>

      <div class="box">
         <img src="images/subject-icon-5.png" alt="">
         <h3>udaan club</h3>
         
      </div>

      <div class="box">
         <img src="images/subject-icon-6.png" alt="">
         <h3>engineerings club</h3>
         
      </div>

   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> Why Join Clubs? </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-1.png" alt="">
               <h3>enhance skills</h3>
            </div>
            <div class="content">
               <h3>enhance skills</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-2.png" alt="">
               <h3>work with fun</h3>
            </div>
            <div class="content">
               <h3>work with fun</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>team work</h3>
            </div>
            <div class="content">
               <h3>team work</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-4.png" alt="">
               <h3>share ideas</h3>
            </div>
            <div class="content">
               <h3>share ideas</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>



         </div>


         </div>

      </div>

   </div>

</section>

<!-- home courses slider section ends -->









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