<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $msg = $_POST['msg'];
    
    //Database connection
    $conn = new mysqli('sql206.epizy.com','epiz_34252009','jBjKjFGYlMXRb','epiz_34252009_access_technology');
    if($conn->connect_error){
    	die('Connection Failed  : '.$conn->connect_error);
     }else{
     	$stmt = $conn->prepare("insert into contact(name, email, mob, msg)values(?, ?, ?, ?)");
     	$stmt->bind_param("ssss",$name, $email, $mob, $msg);
     	$stmt->execute();
     	$stmt->close();
     	$conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS technology</title>

    <!-- slider link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-computer"></i> ACCESS Technology </a>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-bell"></a>
    <a href="#about" class="fas fa-address-card"></a>
    <a href="#contact" class="fas fa-phone"></a>
</nav>

<!-- home section starts-->

<section class="home" id="home">

    <div class="row">

        <div class="content">
              <h3>Adding Care to your <br> PC’S and Giving <br> Futures to your Tech!</h3>
              <a href="https://www.google.com/maps/dir//B.T.Collage+Chowk,+Bagal+Chowk+Road,+near+Raj-+purohit+Bakery,+Kolhapur
              ,+Maharashtra+416008/@16.6996111,74.1693283,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bc100152d6e4f3f:0x3364347b52b32515!2m2!1d74.2393691!2d16.6996228" class="btn">Visit Now</a>
        </div>

        <div class="swiper image-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"></a>
                <a href="#" class="swiper-slide"></a>
                <a href="#" class="swiper-slide"></a>
                <a href="#" class="swiper-slide"></a>
                <a href="#" class="swiper-slide"></a>
                <a href="#" class="swiper-slide"></a>
            </div>
            <video width="100%" height="100%" controls muted>
                <source src="video.mp4" type="video/mp4">
            </video>
        </div>

    </div>

</section>

<!-- home section ends-->

<!-- icons section starts -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-bookmark"></i>
        <div class="content">
            <h3>Ideal Tech Solution</h3>
            <p>At a Single location</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-inr"></i>
        <div class="content">
            <h3>Reasonable Rates</h3>
            <p>On every Product</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-keyboard"></i>
        <div class="content">
            <h3>All Accessories</h3>
            <p>For your every need</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Our Featured Products</span></h1>

    <div class=" swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-0"></a>
                </div>
                <div class="image">
                    <img src="laptop-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Laptop</h3>
                    <div class="info">Brand new Laptops</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-1"></a>
                </div>
                <div class="image">
                    <img src="printer-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>printers</h3>
                    <div class="info">All types of Printers</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-2"></a>
                </div>
                <div class="image">
                    <img src="accessories-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>accessories</h3>
                    <div class="info">Computer accessories</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-3"></a>
                </div>
                <div class="image">
                    <img src="used-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>used laptops</h3>
                    <div class="info">resalable laptops</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-4"></a>
                </div>
                <div class="image">
                    <img src="keyboard-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>keyboards</h3>
                    <div class="info">new keyboards</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-5"></a>
                </div>
                <div class="image">
                    <img src="monitor-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>monitors</h3>
                    <div class="info">new & old monitors</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <div class="icons">
                        <a href="#" class="fas fa-6"></a>
                    </div>
                    <img src="mouse-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>computer mouse</h3>
                    <div class="info">new mouse</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-7"></a>
                </div>
                <div class="image">
                    <img src="cctv-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>CCTV camera</h3>
                    <div class="info">CCTV with installation</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-8"></a>
                </div>
                <div class="image">
                    <img src="repair-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>repairing</h3>
                    <div class="info">all tech repairing</div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-9"></a>
                </div>
                <div class="image">
                    <img src="antivirus-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Antivirus</h3>
                    <div class="info">system antivirus</div>
                </div>
            </div>

        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section start -->

<section class="newsletter">

    <div>
        <h3>"Affordability and durability guaranteed!"</h3>
    </div>

</section>

<!-- newsletter section end -->

<!-- arrivals section start -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>our offers</span></h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-1.png" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-2.jpg" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-3.jpg" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-4.jpg" alt="">
                </div>
            </a>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-5.jpg" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-6.jpg" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-7.jpg" alt="">
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="banner-8.jpg" alt="">
                </div>
            </a>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
    
</section>

<!-- arrivals section end -->

<!-- about section starts -->

<section class="heading">
    <h1 class="heading"><span>about us</span></h1>
</section>

<section class="about" id="about">
    <div>
        <p>Access Technology in Kolhapur is one of the leading businesses in the Assembled Computer Dealers. Also known for CCTV 
            Dealers, Laptop Dealers, Computer Dealers, CCTV Installation Services, Computer Repair & Services, Laptop Repair & Services, 
            Laptop Dealers-HP, Second Hand Laptop Dealers and much more.</p><br>

        <p> Access Technology in Shahupuri has a wide range of products and/or services to cater to the varied requirements of our 
            customers. The staff at our establishment are courteous and prompt at providing any assistance. We readily answer any 
            queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of 
            payment, such as Cash, Master Card, Cheques.</p>
    </div>
    
    <div class="image">
        <img src="about-1.jpg" width="100%" height="100%" alt="">
    </div>

</section>

<!-- about section ends -->

<!-- contact and footer section starts -->

<section class="footer" id="contact">

    <h1 class="heading"><span>contact us</span></h1>
    <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic"><a href="https://www.google.com/maps/dir//B.T.Collage+Chowk,+Bagal+Chowk+Road,+near+Raj-+purohit+Bakery,+Kolhapur
                ,+Maharashtra+416008/@16.6996111,74.1693283,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bc100152d6e4f3f:0x3364347b52b32515!2m2!1d74.2393691!2d16.6996228">Address</a></div>
              <div class="text-one">Near B T College,</div>
              <div class="text-two">Shahupuri, Kolhapur.</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one"><a href="tel:+91 7020089153" >+91 7020089153</a></div>
              <div class="text-two"><a href="tel:+91 7083739255"> +91 7083739255</a></div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one"><a href="mailto:us613560@gmail.com">us613560@gmail.com</a></div>
              <div class="text-two"><a href="mailto:accesstech10@yahoo.com">accesstech10@yahoo.com</a></div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text"><h1><u>Send us a Message</u></h1></div><br>
            <p>If you have any problem that you want to discuss with us, you can send me message from here. It's our pleasure to help you.</p><br>
          <form action="connect.php" method="post">
            <div class="input-box">
              <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="tel" id="mob" name="mob" placeholder="Enter your mobile" maxlength="10">
              </div>
              <div class="input-box">
                <textarea name="msg" id="msg" cols="30" rows="20" placeholder="How Can We Help You..?"></textarea>
              </div>
            <div class="button">
              <button type="submit" value="Send Now">Send Now</button>
            </div>
          </form>
        </div>
        </div>
      </div>

    </div>

    <div class="share">
        <a href="https://www.facebook.com/accesstech10?mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/umarr__15/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/umar-shaikh-968b18228" class="fab fa-linkedin"></a>
    </div>

    <div class="credit"> &copy; copyright @ 2023 by <span>Prathamesh & MohammadUmar</span> | all rights reserved!</div>

</section>

<!-- contact and footer section ends -->

<!-- loader -->

<div class="loader-container">
    <img src="loader.gif" alt="">
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>
</html>