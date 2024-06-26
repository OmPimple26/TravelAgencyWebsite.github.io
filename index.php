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
         <a href="index.php" class="active">home</a>
         <a href="about.php">about us</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- header section ends -->
   <!-- home section starts  -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/homeSlide2.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>tour around the maharashtra</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/homeSlide1.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>express the new destination</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/homeSlide3.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>make your tour effective</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
         </div>
         <!-- <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div> -->
      </div>
   </section>
   <!-- home section ends -->
   <!-- services section starts  -->
   <section class="services">
      <h1 class="heading-title"> our services </h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
         </div>
         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
         </div>
         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
         </div>
         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
         </div>
         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
         </div>
      </div>
   </section>
   <!-- services section ends -->

   <!-- Our information section starts here -->
   <section class="information">
      <h1 class="heading-title">About maharashtra tourism</h1>
      <div>
      <p class="info">
         Maharashtra, located in the western region of India, is a vibrant state renowned for its rich
         cultural heritage, diverse landscapes, and bustling cities. One of its most iconic attractions is Mumbai, the
         state capital and India's financial hub, known for its cosmopolitan atmosphere, historic landmarks like the
         Gateway of India, and the famed Marine Drive. The city also boasts the Elephanta Caves, a UNESCO World Heritage
         Site, which features impressive rock-cut sculptures dedicated to Hindu deities. Beyond Mumbai, Maharashtra
         offers the grandeur of the Ajanta and Ellora Caves near Aurangabad. These ancient cave complexes, another set
         of UNESCO World Heritage Sites, are celebrated for their intricate carvings and paintings that date back to the
         2nd century BCE, showcasing the artistic prowess of ancient Indian civilizations. 
      </p>
         
       <p class="info">
         The state's natural beauty is equally captivating, with destinations like the Sahyadri Mountain
         Range and numerous wildlife sanctuaries. The hill stations of Lonavala, Khandala, and Mahabaleshwar provide a
         cool retreat from the tropical heat, offering picturesque views, trekking paths, and waterfalls. Maharashtra's
         coastal stretch along the Arabian Sea includes pristine beaches such as those in Alibaug and Ratnagiri, where
         visitors can indulge in water sports, relax, and enjoy fresh seafood. Additionally, the Konkan region is famous
         for its scenic beauty and cultural festivals, such as the Ganesh Chaturthi, which is celebrated with great
         fervor across the state. Maharashtra's tourism is further enriched by its historical forts like Raigad and
         Sindhudurg, which tell tales of the Maratha Empire and its valiant leaders, notably Chhatrapati Shivaji
         Maharaj. Overall, Maharashtra offers a blend of urban excitement, historical depth, and natural splendor,
         making it a compelling destination for travelers.
      </p> 
      </div> 
   
   </section>
<!-- Our information section ends here -->



   <!-- <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button> -->
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
      <div class="credit"> 2024 Maharashtra Best Travel Agency | All Rights Reserved! </div>
   </section>
   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>