<?php
// header('location:http://localhost/sohel/Dentist%20Website/index.php');

$conn = mysqli_connect('localhost','root','','dental') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
    ?><script>
        confirm( 'appointment make successfully!');
        window.location="index.php";
        
    </script>
    <?php
   }else{
    ?>
    <script>
        confirm('appointment failed');
    </script>
    <?php
    
   }
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <link rel="website icon" type="png" href="images/logo.png">
        <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div id="preloader"> -->

    </div>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-tooth"></i> dentist </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="about.html">about</a>
            <a href="services.html">services</a>
            <a href="team.html">team</a>
            <a href="#pricing">pricing</a>
            <a href="#blog">blog</a>
            <!-- <a href="#contact us">contact us</a> -->
        </nav>

        <a href="#contact" class="btn"> make appointment </a>
        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header end -->

    <!-- home -->

    <section class="home" id="home">

        <div class="content">
            <h3>make your smile shine</h3>
            <p>Do you know that your dental problems can likely to have chronic condition to your overall health? Are you getting the dental treatments with good dental practice and modern instruments? Are you looking for the best and affordable dental implants India? Get a consultation Call with more information about your dental query.</p>
            <a href="#contact" class="btn">make appointment</a>
        </div>


    </section>

    <!-- home end -->

    <!-- about us section-->

    <section class="about" id="about">

        <h1 class="heading"> about us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about.webp" alt="">
            </div>

            <div class="content">
            <h3>our clinic is made for you to be smiling all the time</h3>
                <p>Clove dental delivers quality dentistry with a personalized touch. Each patient is treated with the utmost care, compassion, empathy and state-of-the-art dentistry that promises nothing but the best.</p> 
                <p>We provide oral care solutions for all dental problems, including Root Canal Treatment, teeth whitening, teeth cleansing and polishing, complete or partial dentures, orthodontic treatment and more. With our team of expert dentists, we take care of all your dental needs and ensure complete sterilization in all our procedures.</p>
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

        </div>

    </section>


    <!-- about end -->


  <section class="services" id="services">

<h1 class="heading">our services</h1>

<div class="box-container container">

   <div class="box">
      <img src="images/icon-1.svg" alt="">
      <h3>Alignment specialist</h3>
      <P>Our Alignment Technician is responsible for the safe operation of aligning all the newly mounted tires and wheels on a customer's vehicle.</P>
   </div>

   <div class="box">
      <img src="images/icon-2.svg" alt="">
      <h3>Cosmetic dentistry</h3>
      <p>They are  the branch of dentistry that focuses on improving the appearance of your smile.</p>
   </div>

   <div class="box">
      <img src="images/icon-3.svg" alt="">
      <h3>Oral hygiene experts</h3>
      <p>They are primary healthcare professionals who work independently of or alongside dentists and other dental professionals to provide full oral health care.</p>
   </div>

   <div class="box">
      <img src="images/icon-4.svg" alt="">
      <h3>Root canal specialist</h3>
      <p>They are treatment to repair and save a badly damaged or infected tooth instead of removing it.</p>
   </div>

   <div class="box">
      <img src="images/icon-5.svg" alt="">
      <h3>Live dental advisory</h3>
    <p>We are provide the dental profession with evidence-based and clinically relevant information on dental restorative products, and dental equipment.</p>
    </div>

   <div class="box">
      <img src="images/icon-6.svg" alt="">
      <h3>Cavity inspection</h3>
      <p>We are  observing the insides of the lips and the buccal mucosa (inside of checks), the tongue,and the hard and soft palate, the pharynx, and salivary glands</p>
   </div>

</div>

</section>
    <!-- services end -->

    <!-- team section -->

    <section class="team" id="team">

        <h1 class="heading"> our team</h1>

        <div class="swiper team-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <a href="mydentis.html"><img src="images/d1.jpg" alt=""></a>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Dr. Fischer </h3>
                        <span>Principal Dentist</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <a href="mydentis.html"><img src="images/d2.jpg" alt=""></a>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Dr  Krieger</h3>
                        <span>Associate Dentist</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <a href="mydentis.html"><img src="images/d3.jpg" alt=""></a>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Dr. Laura </h3>
                        <span>Associate Dentist</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <a href="mydentis.html"><img src="images/d4.jpg" alt=""></a>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Dr. Paola</h3>
                        <span>Principal Dentist</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <a href="mydentis.html"><img src="images/d5.jpg" alt=""></a>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Dr Victoria</h3>
                        <span>Associate Dentist</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- team section ends -->

<!-- Pricing plan -->
<section class="pricing" id="pricing">
    <h1 class="heading">Pricing plan</h1>
    <div class="box-container">
        <div class="box">
            <h3 class="title">basic</h3>
            <div class="price">
                <span class="amount">1500</span>
                <span class="currency">₹</span>
                <span class="duration">/year</span>
            </div>
            <ul>
                <li><i class="fas fa-check"></i> alignment specialist</li>
                <li><i class="fas fa-times"></i> cavity inspection</li>
                <li><i class="fas fa-check"></i> cosmetic specialist</li>
                <li><i class="fas fa-times"></i>oral hygien eexper</li>
            </ul>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box second  ">
            <h3 class="title">Premium</h3>
            <div class="price">
                <span class="amount">4000</span>
                <span class="currency">₹</span>
                <span class="duration">/year</span>
            </div>
            <ul>
                <li><i class="fas fa-check"></i> alignment specialist</li>
                <li><i class="fas fa-check"></i> cavity inspection</li>
                <li><i class="fas fa-check"></i> cosmetic specialist</li>
                <li><i class="fas fa-check"></i>oral hygien eexper</li>
            </ul>
            <a href="#" class="btn">read more</a>
        </div>

    </div>
</section>

<!-- Pricing plan -->

    <!-- pricing plan ends -->

    <!-- blog -->

    <section class="blog" id="blog">

        <h1 class="heading">our blogs</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="https://en.wikipedia.org/wiki/Tooth_decay" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Tooth decay is also known as dental caries or dental cavities. It is the most common dental problem that dentists see in patients. Practically everyone, at some point in their life, has experienced tooth decay. </p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="https://en.wikipedia.org/wiki/Oral_hygiene" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Some of the most common diseases that impact our oral health include cavities (tooth decay), gum (periodontal) disease, and oral cancer. More than 40% of adults report having felt pain in their mouth within the last year.</p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="https://en.wikipedia.org/wiki/Periodontal_disease" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Dental infections, including dental caries and periodontal disease, are commonly encountered in the primary care setting in the United States. Nationally, dental caries is the most common disease in children and adults</p>
                    <!-- <a href="#" class="btn">read more</a> -->
                </div>
            </div>

        </div>

    </section>

    <!-- blog ends -->

    <!-- contact -->

    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         
            <span>your name :</span>
            <input type="text" name="name" placeholder="Enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="Enter your number" class="box" required>
            <!-- <span>services</span>
            <select name="services" class="box">
                <option value="select-services">select-services</option>
                <option value="1">Cavity inspection</option>
                <option value="2">Oral hygiene</option>
                <option value="3">Alignment</option>
            </select> -->
            <span>appointment date :</span>
            <input type="datetime-local" name="date"  placeholder="Enter your number" class="box" required>
            <input type="submit" value="Book Now" name= "submit"class="btn">
         </form>  
         
    </section>

    <!-- contact ends-->

    <!-- footer -->

    <sectin class="footer">

        <div class="box-container">

            <div class="box">
                <h3>address</h3>
                <a href="#" class="link"><i class="fas fa-map-marker-alt"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ex placeat.</a>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>e-mail</h3>
                <a href="mailto:sohel170404@gmail.com" class="link"><i class="fa fa-envelope"></i> sohel170404@gmail.com</a>                
            </div>

            <div class="box">
                <h3>call us</h3>
                <a href="tel:+91 9316434177" class="link"> <i class="fas fa-phone"></i> +91 9316434177  </a>
                
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p><i class="fas fa-clock"></i> monday - friday : 8:00 AM - 8:00 PM <br>
                </p>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mansuri Sohel</span>  </div>
    </sectin>





    <!-- footer ends -->

















    <!-- swiper js link  -->
    <script src="swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>
</html>