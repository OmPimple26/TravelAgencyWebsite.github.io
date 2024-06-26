<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Website</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".scroll-top").click(function () {
            $("html, body").animate({
               scrollTop: 0
            }, "slow");
            return false;
         });
      });
   </script>

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="index.php" class="logo"><img src="images/logo.jpg"></a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="about.php">about us</a>
         <a href="package.php" class="active">package</a>
         <a href="book.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/packageImage.jpg) no-repeat">
      <h1>packages</h1>
   </div>

   <!-- packages section starts  -->

   <section class="packages">

      <h1 class="heading-title">top packages</h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/historicalImage.jpg" alt="">
            </div>
            <div class="content">
               <h3>Historical Tourism Packages</h3>
               <p>Discover Maharashtra's rich history at its iconic forts like Raigad, Shivneri, and Daulatabad, and the
                  ancient rock-cut Ajanta and Ellora Caves. Explore the colonial architecture in Mumbai and the historic
                  Shaniwar Wada in Pune for a journey through time.
               </p>
               <!-- <h2>BDT 10,900</h2> -->
               <a href="historical.php" class="btn">Click Here</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/csmvs.jpg" alt="">
            </div>
            <div class="content">
               <h3>Cultural Tourism Packages</h3>
               <p>Explore Maharashtra's rich cultural heritage at iconic sites like Mumbai's Chhatrapati Shivaji Maharaj
                  Vastu Sangrahalaya, the Lavani folk performances in Pune, and the traditional Warli art villages in
                  Palghar. Experience the vibrant festivals and classical music events in Nashik and Sangli for an
                  immersive cultural journey.
               </p>
               <!-- <h2>BDT 9,900</h2> -->
               <a href="cultural.php" class="btn">Click Here</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/religiousImage.jpg" alt="">
            </div>
            <div class="content">
               <h3>Religious Tourism Packages</h3>
               <p>Discover Maharashtra's spiritual side at renowned religious sites like the Shirdi Sai Baba Temple,
                  Trimbakeshwar Shiva Temple in Nashik, and the Siddhivinayak Temple in Mumbai. Experience the divine
                  ambiance of Pandharpur's Vitthal Temple and the ancient Ellora Caves, home to the majestic Kailasa
                  Temple.
               </p>
               <!-- <h2>BDT 11,900</h2> -->
               <a href="religious.php" class="btn">Click Here</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/naturalImage.jpg" alt="">
            </div>
            <div class="content">
               <h3>Natural Tourism Packages</h3>
               <p>Immerse yourself in Maharashtra's natural beauty at scenic spots like Lonavala, Mahabaleshwar, and
                  Matheran, and the breathtaking landscapes of the Western Ghats and Tadoba Andhari Tiger Reserve.
                  Explore the serene beaches of Ganpatipule and the tranquil Bhandardara Lake for a refreshing escape.
               </p>
               <!-- <h2>BDT 13,900</h2> -->
               <a href="natural.php" class="btn">Click Here</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/adventureImage.jpg" alt="">
            </div>
            <div class="content">
               <h3>Adventure Tourism Packages</h3>
               <p>Experience the thrill of adventure in Maharashtra with activities like trekking in the Sahyadri
                  ranges, river rafting in Kolad, and exploring the rugged terrains of Harishchandragad and Sandhan
                  Valley. Dive into exhilarating experiences such as paragliding in Kamshet and camping amidst the
                  scenic beauty of Bhandardara for an adrenaline-fueled getaway.
               </p>
               <!-- <h2>BDT 7,900</h2> -->
               <a href="adventure.php" class="btn">Click Here</a>
            </div>
         </div>

      </div>

      <!-- <div class="load-more"><span class="btn">see more</span></div> -->
      <!-- <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button> -->

   </section>

   <!-- packages section ends -->
   <!-- footer section starts  -->

   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>
         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         </div>
         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +989-876-543210 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ompimple04@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Chiplun, India - 415605 </a>
         </div>
         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         </div>
      </div>
      <div class="credit"> 2024 Maharashtra Best Travel Agency | all rights reserved! </div>
   </section>

   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>