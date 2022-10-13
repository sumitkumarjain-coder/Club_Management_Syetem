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
   <title>about</title>

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
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</section>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">we have best clubs for you</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laboriosam natus. Ut maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.</p>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>15+</h3>
            <span>clubs</span>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>1200+</h3>
            <span>students</span>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>50+</h3>
            <span>awards</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- teachers section starts  -->

<section class="teachers">

   <h1 class="heading">Club captains</h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-1.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>shreya</h3>
               <span>chair | PIET</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-2.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>johny</h3>
               <span>captain | coading club</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-3.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Aliya</h3>
               <span>V.C</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-4.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Pregya</h3>
               <span>C.O. Chair</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-5.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>jacky</h3>
               <span>OWNER</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/teacher-6.png" alt="">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>kriti</h3>
               <span>Member</span>
            </div>
         </div>
         
      </div>

   </div>

</section>

<!-- teachers section ends -->

<!-- students reviews section starts  -->

<section class="reviews">

   <h1 class="heading"> our students review </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-4.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-5.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/pic-6.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- students reviews section ends -->








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