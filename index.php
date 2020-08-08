<?php
session_start();
/*
if(isset($_POST['main_ref'])){
  unset($_COOKIE['home']);
  setcookie('home', '', time()-3600, '/');
}
*/
if(!isset($_COOKIE['home'])){
    
  include 'admin/DB.php';
  $query='SELECT * FROM homepage';
  $result = $con->query($query);
  $row = $result->fetch_assoc();
  setcookie('home', json_encode($row), time()+86400, '/');
  header('Location: index.php');
  
}else{
  $row = json_decode($_COOKIE['home'], true);
  
}
if(isset($row) ){
  $title=$row['title'];
  $heading=$row['heading'];
  $content=$row['content'];
  
}

/*

if(isset($_POST['refresh'])){
    unset($_COOKIE['ads1']);
    //unset($_COOKIE['ads2']);
    setcookie('ads1', '', time()-3600, '/');
    //setcookie('ads2', '', time()-3600, '/');
}

if(!isset($_COOKIE['ads1'])) {
*/
include 'admin/DB.php';
$query = "SELECT * FROM contact WHERE VISIBILITY = 1 LIMIT 12";
$result = $con->query($query);
//$i=0;
$ads = array();
$rows = $result->num_rows;
//$min = (6<$rows)?6:$rows;
while($data = $result->fetch_assoc()){
    array_push($ads, $data);
   /* $i++;
    if($i==$min){
        setcookie('ads1', json_encode($ads), time()+86400, '/');
        $ads = array();
    }else if($i==$rows){
        setcookie('ads2', json_encode($ads), time()+86400, '/');

    }
    */
    
}
//setcookie('ads1', json_encode($ads), time()+86400, '/');

$con->close();
/*
header('Location: index.php');
}else{
$ads = json_decode($_COOKIE['ads1'], true);

if(isset($_COOKIE['ads2'])){
    $ads2 = json_decode($_COOKIE['ads2'], true); 
    $ads = array_merge($ads, $ads2);

    
}

}
*/


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
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
      <a class="navbar-brand h1" href="index.php"><?php echo $title?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li>
          <!-- remove this form later -->
          <!--form action="index.php" method="post">
          <input class=" btn btn-outline-success" type="submit" name="main_ref" value="ref">
          </form -->
          </li>
          <li class="nav-item p-10 active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item p-10">
            <a class="nav-link" href="about_us.php">About</a>
          </li>
          <li class="nav-item p-10">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        </div>
    </nav>
    <!--<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-4">
            <h1 class="m-0 site-logo"><a href="index.php">Services</a></h1>
          </div>

          <div class="col-8">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="about us.html" class="nav-link">About</a></li>
                <li><a href="#blog-section" class="nav-link">Advertisements</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

          </div>

        
        </div>
      </div>
      
    </header>-->


    <div class="site-blocks-cover overlay bg-light" style="background-image: url('images/hero_bg_1.jpg'); " id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay=""><?php echo $heading?></h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="100"><?php echo $content?></p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#blog-section" class="btn smoothscroll btn-primary">Our Advertisements</a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>


      <!--form action="index.php" method="post">
          <input class=" btn btn-outline-success" type="submit" name="refresh" value="Refresh cookies">
      </form -->
    
    <section class="site-section bg-light" id="blog-section">

        <div class="container">
        <div class="row">

          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Advertisements</h2>
          </div>
            <?php
            foreach ($ads as $item){
                ?>
                <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                    <div class="blog_entry">
                        <img src="uploaded_images/<?php echo $item['image']?>" alt="Image" onerror="this.onerror = null; this.src='uploaded_images/default.jpg'" class="img-fluid">
                        <div class="p-4 bg-white">
                            <h3><?php echo $item['product'];?></h3>
                            <span class="date"><?php echo $item['brand'];?></span>
                            <p><?php echo stripslashes($item['description']);?></p>
                            <span class="date">Adv by: <?php echo $item['name'];?></span>
                            <span class="date">Contact Me at: +91<?php echo $item['phone'];?></span>
                            <p><span class="icon-youtube red"></span><a class="red" href="<?php echo $item['youtube'];?>" target="_blank"><strong>Youtube</strong></a></p>
                            <p><a class="btn b-btn" target="_blank" href="<?php echo $item['website'];?>">View Our Site</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
          
        </div>
      </div>
    </section>


    
    <footer class="site-section bg-light">
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
            <div style="color: #f8f9fa;">
            <p>
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