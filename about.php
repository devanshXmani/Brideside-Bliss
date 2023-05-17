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
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="about">

   <img src="images/about-img.png" alt="">
   <h3>About us</h3>
   <p>Whether you're looking to book a cocktail party, post-work gathering, celebratory function, conference, business meeting, wedding or private dining event, our dedicated Events Managing team can create a package that will meet your every need.</p>
   <a href="contact.php" class="btn">contact us</a>

</section>

<section class="team">

   <h1 class="heading">our team</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/team-1.jpeg" alt="">
         <h3>Devansh Mani</h3>
         <p>Manager</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-2.jpeg" alt="">
         <h3>Siddhi Manglam</h3>
         <p>Event Planner</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-3.jpeg" alt="">
         <h3>Dev Kumar</h3>
         <p>Venue Management</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-4.jpeg" alt="">
         <h3>Shreya Gupta</h3>
         <p>Decoration Managment</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-5.jpeg" alt="">
         <h3>Sajal Kumar</h3>
         <p>Photography Managment</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
      </div>

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