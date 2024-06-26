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

    <div class="heading" style="background:url(images/gatewayOfIndia.jpg) no-repeat">
        <h1>Cultural Tourism</h1>
    </div>

    <!-- packages section starts  -->

    <section class="packages">

        <h1 class="heading-title">Top Cultural Tourism Packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/csmt.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Chhatrapati Shivaji Maharaj Terminus</h3>
                    <p> Chhatrapati Shivaji Maharaj Terminus (CSMT) in Mumbai is a UNESCO World Heritage site renowned
                        for its Victorian Gothic architecture and role as a major railway hub.</p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/shaniwarWada.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Shaniwar Wada</h3>
                    <p>Shaniwar Wada, a historic fortification in Pune, is renowned for its majestic architecture and
                        significant role as the seat of the Peshwas of the Maratha Empire.
                    </p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/gatewayOfIndia.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gateway Of India</h3>
                    <p>The Gateway of India, an iconic arch-monument in Mumbai, was built in 1924 to commemorate the
                        visit of King George V and Queen Mary to India.
                    </p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/ajantaElloraCaves.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ajanta And Ellora Caves</h3>
                    <p>The Ajanta and Ellora Caves in Maharashtra are UNESCO World Heritage sites renowned for their
                        magnificent rock-cut temples and exquisite ancient Buddhist, Hindu, and Jain sculptures and
                        murals.
                    </p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/trimbakeshwar.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Trimbakeshwar Temple</h3>
                    <p>Trimbakeshwar Temple in Nashik, Maharashtra, is a revered Hindu shrine dedicated to Lord Shiva,
                        known for its unique Jyotirlinga embodying the trinity of Brahma, Vishnu, and Shiva.
                    </p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/mahalakshmiTemple.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mahalakshmi Temple</h3>
                    <p>The Mahalakshmi Temple in Kolhapur, Maharashtra, is a revered Hindu shrine dedicated to Goddess
                        Mahalakshmi, known for its historical significance, stunning architecture, and as one of the
                        Shakti Peethas.
                    </p>
                    <h2>Rs 5,000</h2>
                    <a href="book.php" class="btn">Book Now</a>
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