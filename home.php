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
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <h3>plan your wedding!</h3>
               <p>The most important day in a couple's life. Guaranteeing personalized solutions and flawless execution, our venues provide the perfect location for your special day.</p>
               <a href="portfolio.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <h3>plan your Birthday!</h3>
               <p>Whether an all-day or the ultimate extravaganza that lasts well into the wee hours, our Urban Events team is here to make sure all your birthday party wishes come true so you can kick back, drink up and enjoy your special day!</p>
               <a href="portfolio.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <h3>plan your meeting!</h3>
               <p>From formal, to not-so-formal, our flexible event spaces can cater to your every need for meetings and conferences large or small, and our dedicated event team can assist with all aspects of your event planning.</p>
               <a href="portfolio.php" class="btn">discover more</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/service-1.jpg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>Event Photos, Videos, Candids etc.</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-2.jpg" alt="">
            <div class="content">
               <h3>Decoration</h3>
               <p>Venue Designing and Decoration</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-3.jpg" alt="">
            <div class="content">
               <h3>Venue Selection</h3>
               <p>Selecting Venues regarding Clients References</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-4.jpg" alt="">
            <div class="content">
               <h3>fine dinning</h3>
               <p>Cuisine Fit for the Special Event</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-5.jpg" alt="">
            <div class="content">
               <h3>Ceremonial Preparation</h3>
               <p>Preparations like Birthday Cakes, Anniversry Cakes etc.</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-6.webp" alt="">
            <div class="content">
               <h3>Invoice</h3>
               <p>Most Important Closer For Every Events.</p>
               <a href="portfolio.php" class="btn">Gallery</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>










<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>