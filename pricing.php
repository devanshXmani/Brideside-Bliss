<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

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

<section class="pricing">

   <h1 class="heading">pricing</h1>

   <div class="box-container">
      <div class="box">
         <h3>basic plan</h3>
         <div class="price">Rs 75,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography(Main Event)</p>
            <p> <i class="fas fa-check"></i> Normal Food</p>
            <p> <i class="fas fa-check"></i> Minimal Decoration</p>
            <p> <i class="fas fa-check"></i> Invoice</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>premium plan</h3>
         <div class="price">Rs 4,50,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography(Whole Event)</p>
            <p> <i class="fas fa-check"></i> Dinning(2-Course)</p>
            <p> <i class="fas fa-check"></i> Mediocre Decoration</p>
            <p> <i class="fas fa-check"></i> Venue Arrangments</p>
            <p> <i class="fas fa-check"></i> Invoice</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>ultimate plan</h3>
         <div class="price">Rs 10,00,000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> Photography and Cinematography</p>
            <p> <i class="fas fa-check"></i> Dinning(3-Course with Starters and Deserts)</p>
            <p> <i class="fas fa-check"></i> Full Decoration</p>
            <p> <i class="fas fa-check"></i> Ceremonial Preparations(if-Any)</p>
            <p> <i class="fas fa-check"></i> Venue Arrangements</p>
            <p> <i class="fas fa-check"></i> Invoice</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.jpg" alt="">
            <h3>Vartika Joshi</h3>
            <p>"SPLENDID SOIREES has completely streamlined our process of fielding reservation inquiries, booking events and invoicing customers. The website has everything we need with tremendous ease of access and excellent customer service. "</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.jpg" alt="">
            <h3>Dev Kumar</h3>
            <p>"SPLENDID SOIREES has been great for my business. It is easy to navigate, and there are great features that make planning an event more organized and the products I produce more professional. My clients love the interactive features. "</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.jpeg" alt="">
            <h3>Siddhi Manglam</h3>
            <p>"SPLENDID SOIREES is a fantastic site and tool for planners. I love the event budget tool and having all my event info in one place. Being a corporate planner, I like how I can set it up for a more business and corporate look but social and wedding planners can also give it a more social look. Keep doing what you are doing."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.jpg" alt="">
            <h3>Devansh Mani</h3>
            <p>"I have truly enjoyed using SPLENDID SOIREES to keep my event details in one central location, which definitely makes it easier for me to stay on track while planning events. I especially like the to-do list templates that allow me to set up an event and load in all my to-do’s without starting from scratch each time! "</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.jpg" alt="">
            <h3>Shreya Gupta</h3>
            <p>"It makes sure our events and planning staff are always up to date, including things like files, proposals and invoices."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.webp" alt="">
            <h3>Devashish Mishra</h3>
            <p>"Great for scheduling our events and verifying that we do not overbook. It's also helpful to keep all the information about an event in one place so all staff members can access it."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
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