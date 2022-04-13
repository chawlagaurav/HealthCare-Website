<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <script >
       
        $(document).ready(function(){
           $("#icon").click(function(){
              $("ul").toggleClass("show");
    });
});
    </script>
    
    
    <title>HealnFeel</title>
</head>
<body>



    <!-- NavBar -->

    <nav>
        <label class="logo">HEAL <span>&</span> FEEL</label>
        <ul >
            
            <li><a class="navlink active" href="index.html">Home</a></li>
            <li><a class="navlink" href="#condi">Conditions</a></li>
            <li><a class="navlink" href="#exp">Discover</a></li>
            <li><a class="navlink" href="#doci">Doctors</a></li>
            <li><a href="#" class="navlink drop">More <i class="fa fa-caret-down"></i></a><ul class="dropdown">
        <li><a href="contact/contact.php">Book Appointment</a></li>
        <li><a href="display.php">Appointment Status</a></li>
        <li><a href="">Self Test</a></li>
        
      </ul></li>
            <li><a class="navlink" href="logout.php"><button class="login">Log Out</button></a></li>
        </ul>
        <label id="icon"><i class="fa fa-bars "></i></label>
    </nav>

    
      
    
    
    

</div>

    <!-- Body -->

    <div  class="container sec1">
        <img  class="homeimg"  src="image/homedoc1.png" alt="Homme Image">
        <h1 >For your family's  <br> <span> Wellness</span> </h1>
        <h3>A helping hand toward your radient health</h3>
    </div>

    <div  id="condi" class="container sec3">
        <h1 class="sec3head">Health Conditions</h1>
        <div data-aos="zoom-in" data-aos-duration="2000" class="flex-container">
            <div class="sec3img">
                <a href="https://www.healthline.com/breast-cancer"><img src="image/con1.jfif" alt=""></a>
                <h3>Breast Cancer</h3>
            </div>
            <div class="sec3img">
                <a href="https://www.healthline.com/irritable-bowel-disease"><img src="image/con2.webp" alt=""></a>
                <h3>IBD</h3>
            </div>
            <div class="sec3img">
                <a href="https://www.healthline.com/migraine"><img src="image/con3.webp" alt=""></a>
                <h3>Migraine</h3>
            </div>
            <div class="sec3img">
                <a href="https://www.healthline.com/health/adhd"><img src="image/con4.jpg" alt=""></a>
                <h3>ADHD</h3>
            </div>
            <div class="sec3img">
                <a href="https://www.healthline.com/health/copd"><img src="image/con5.png" alt=""></a>
                <h3>COPD</h3>
            </div>
            <div class="sec3img">
                <a href="https://www.healthline.com/health/depression"><img src="image/con6.webp" alt=""></a>
                <h3>Depression</h3></h3>
            </div>
            
            
        </div>
        

    </div>

    <div id="exp" class="container sec2">
        <h1 class="sec2head">Explore</h1>
        <div data-aos="zoom-in" data-aos-duration="2000" class="card__container">
            <div class="card">
              <div class="card__content">
                <h3 class="card__header">Nutrition</h3>
                <p class="card__info">The Definitive Guide to Health Eating in Real Life</p>
                <a href="https://www.healthline.com/nutrition"><button class="card__button">Read now</button></a>
              </div>
            </div>
            <div class="card">
              <div class="card__content">
                <h3 class="card__header">Mental Health</h3>
                <p class="card__info">How to take care of your mental health on the job.</p>
                <a href="https://www.healthline.com/mental-health"><button class="card__button">Read now</button></a>
              </div>
            </div>
            <div class="card">
              <div class="card__content">
                <h3 class="card__header">Fitness</h3>
                <p class="card__info">A Comprehensive Guide to Engaging Your Core</p>
                <a href="https://www.healthline.com/fitness"><button class="card__button">Read now</button></a>
              </div>
            </div>
            
    </div>

    <div class="gapsec">

    </div>

    <div  id="doci" class="container sec4">
        <h1 class="sec3head">Our Doctors</h1>
        <div class="flex-container">
            <div class="sec3img">
                <img src="image/doc1.jpg" alt="">
                <h3>Dr Rudolph</h3>
            </div>
            <div class="sec3img">
                <img src="image/doc2.jpg" alt="">
                <h3>Dr Aahaan</h3>
            </div>
            <div class="sec3img">
                <img src="image/doc3.jpg" alt="">
                <h3>Dr Radhika</h3>
            </div>
            <div class="sec3img">
                <img src="image/doc4.jpg" alt="">
                <h3>Dr James</h3>
            </div>
            <div class="sec3img">
                <img src="image/doc5.jpg" alt="">
                <h3>Dr Angela</h3>
            </div>
            <div class="sec3img">
                <img src="image/doc6.jpg" alt="">
                <h3>Dr Stylar</h3>
            </div>
            
            
        </div>
        

    </div>


    <div class="container sec5">
        <iframe src="https://www.youtube.com/embed/jh5U5BnpGN8?autoplay=1" frameborder="0"></iframe>
    </div>

    <div class="container foot">
        <h1>Made by  ♥️</h1>

        
        
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script> 

   
    
</body>
</html>