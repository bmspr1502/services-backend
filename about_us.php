<?php
include 'admin/services/servicedetails.php';

if(isset($_POST['main_ref'])){
  unset($_COOKIE['about']);
  setcookie('about', '', time()-3600, '/');
}

if(isset($_POST['serv_ref'])){
  unset($_COOKIE['services']);
  setcookie('services', '', time()-3600, '/');
}
if(!isset($_COOKIE['about'])){
  include 'admin/about/aboutusDetails.php';
  setcookie('about', json_encode($row), time()+86400, '/');
  header('Location: about_us.php');
}else{
  $row = json_decode($_COOKIE['about'], true);
}

if(!isset($_COOKIE['services'])){
  include 'admin/services/servicedetails.php';
  setcookie('services', json_encode($values), time()+86400, '/');
  header('Location: about_us.php');
}else{
  $values = json_decode($_COOKIE['services'], true);
  $len = count($values);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="istyle.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bule">
      <a class="navbar-brand h1" href="index.php">Services</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-10">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active p-10">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item p-10">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        </div>
    </nav>

    

    <div class="site-section" id="about-section">
    <!-- remove this form later -->
    <form action="about_us.php" method="post">
          <input class=" btn btn-outline-success" type="submit" name="main_ref" value="ref">
          </form>
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title"><?php echo $row['title'];?></h2>
          </div>
          <div class="col-lg-4">
            <p><?php echo $row['leftcontent'];?></p>

          
          </div>
          <div class="col-lg-4">
            <img src="about_usImage/<?php echo $row['image'];?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4">
          <p><?php echo $row['rightcontent'];?></p>
          </div>
          
          
        </div>
      </div>
    </div>
     <div class="site-section" id="services-section">
     <form action="about_us.php" method="post">
          <input class=" btn btn-outline-success" type="submit" name="serv_ref" value="ref services">
          </form>
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Services</h2>
          </div>
          <?php
          
          for($x=0;$x<$len;$x++){

            if($x%2==0){
              ?>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="services_logo/<?php echo $values[$x]['logo']?>" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3><?php echo $values[$x]['title']?></h3>
                <p><?php echo $values[$x]['description']?></p>
              </div>
            </div>
          </div>
          
          <?php
            }
            else{
              ?>
          
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="services_logo/<?php echo $values[$x]['logo'];?>" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3><?php echo $values[$x]['title'];?></h3>
                <p><?php echo $values[$x]['description'];?></p>
              </div>
            </div>
          </div>
          <?php
            }
          }
            ?>

          <!--<div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/003-travel-2.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Brand &amp; Logo Design</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/004-travel-3.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Social Media Advertising</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/005-travel-4.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Social Media Advertising</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/006-food.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Web Design / Development</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>-->

        </div>
      </div>
    </div>


    <footer class="site-section bg-light ">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">For Advertising<br> click below </h3>
            <p><a class="btn bule" href="contact.php">Contact Us</a></p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li>Content Marketing</li>
                  <li>Brand & Logo</li>
                  <li>Social Advertising</li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Resources</h3>
                <ul class="list-unstyled">
                  <li>Social Marketing</li>
                  <li>Web Design</li>
                  <li>Web Development</li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Templates</h3>
                <ul class="list-unstyled">
                  <li>Illustration</li>
                  <li>Video Editing</li>
                  <li>Copywriting</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle m-2"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-dribbble"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <p style="color: #f8f9fa;">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a style="color: #f8f9fa;" href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>  
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  </body>
</html>