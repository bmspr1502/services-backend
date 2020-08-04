<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
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
          <li class="nav-item p-10">
            <a class="nav-link" href="about_us.php">About</a>
          </li>
      
          <li class="nav-item active p-10">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        </div>
    </nav>


  

    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact Form</h2>
              <p><?php if(isset($_SESSION['data'])){ echo "Your data was not entered properly, review and submit again";}?></p>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <form action="send_details.php" class="form" method = "post" enctype = "multipart/form-data">
                
              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Name" id="input_name" name = "name" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['name'];}?>" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="email" class="form-control" placeholder="Email address" id="input_email" name = "email" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['email'];}?>"required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Phone number" id="input_phone" name = "phone" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['phone'];}?>"required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="file" class="form-control" onchange="updateImage(event)"  name = "image" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Product name" id="input_product" name = "product" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['product'];}?>" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Brand" id="input_brand" name = "brand" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['brand'];}?>" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <textarea cols="30" rows="10" class="form-control" id="input_description" placeholder="Description" name = "description" required><?php if(isset($_SESSION['data'])){echo $_SESSION['data']['description'];}?></textarea>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="url" class="form-control" placeholder="Youtube link" id="input_youtube" name = "youtube" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['youtube'];}?>" required>
                </div>
              </div>

              <div class="row mb-4">
                <div class="form-group col-12">
                  <input type="url" class="form-control" placeholder="Website address" id="input_website" name = "website" value="<?php if(isset($_SESSION['data'])){echo $_SESSION['data']['website'];}?>" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input type="submit" class="btn btn-primary" value="Send Message">

                </div>
              </div>
              <?php if(isset($_SESSION['data'])){ unset($_SESSION['data']);} ?>
            </form>
          </div>

          <div class="col-lg-5">
              <button type="button" id="preview" class="btn btn-success float-right" onclick="showCard()">Preview Card</button>
              <div class="blog_entry" id="card" style="display: none">
                  <img src="" alt="Image" id="card_image" onerror="this.onerror = null; this.src='uploaded_images/default.jpg'" class="img-fluid">
                  <div class="p-4 bg-white">
                      <h3 id="card_product"></h3>
                      <span class="date" id="card_brand"></span>
                      <p id="card_description"></p>
                      <span class="date" >Adv by: <span id="card_name"></span></span>
                      <span class="date">Contact Me at: +91<span id="card_phone"></span></span>
                      <p><span class="icon-youtube red"></span><a class="red" id="card_youtube" disabled="" href="#"><strong>Youtube</strong></a></p>
                      <p><a class="btn b-btn" id="card_website" href="">View Our Site</a></p>
                  </div>
              </div>
            <h3>London</h3>
            <ul class="list-unstyled mb-5">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+1 232 3235 324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>youremail@domain.com</span>
              </li>
            </ul>

            <h3>New York</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+1 232 3235 324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>youremail@domain.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>  
    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">Services</h3>
            <p><span class="d-inline-block d-md-block">203 Fake St. Mountain View,</span> San Francisco, California, USA</p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Content Marketing</a></li>
                  <li><a href="#">Brand & Logo</a></li>
                  <li><a href="#">Social Advertising</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Resources</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Social Marketing</a></li>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Web Development</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Templates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Illustration</a></li>
                  <li><a href="#">Video Editing</a></li>
                  <li><a href="#">Copywriting</a></li>
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

  <script type="text/javascript">
      let count=0;
      var showCard = function (){
          count++;
          if(count%2===1){
              document.getElementById('card').style.display='block';
              document.getElementById('preview').className = 'btn btn-danger float-right';
              document.getElementById('preview').innerHTML = 'Close Preview';
              updateCard();
          }else{
              document.getElementById('card').style.display='none';
              document.getElementById('preview').className = 'btn btn-success float-right';
              document.getElementById('preview').innerHTML = 'Preview Card';
              updateCard();
          }
      };
      function updateCard(){
          let name = document.getElementById('input_name').value;
          //let email = document.getElementById('input_email').value;
          let phone = document.getElementById('input_phone').value;
          let product = document.getElementById('input_product').value;
          let brand = document.getElementById('input_brand').value;
          let description = document.getElementById('input_description').value;
          let youtube = document.getElementById('input_youtube').value;
          let website = document.getElementById('input_website').value;

          document.getElementById('card_name').innerHTML = name;
          document.getElementById('card_phone').innerHTML = phone;
          document.getElementById('card_product').innerHTML = product;
          document.getElementById('card_brand').innerHTML = brand;
          document.getElementById('card_description').innerHTML = description;
          if(youtube===''){
              document.getElementById('card_youtube').className = 'disabled';
              document.getElementById('card_youtube').disabled = 'disabled';
              document.getElementById('card_youtube').href="javascript:function() { return false; }";
          }else {
              document.getElementById('card_youtube').className = 'red';
              document.getElementById('card_youtube').disabled = '';
              document.getElementById('card_youtube').href = youtube;
          }
          document.getElementById('card_website').href = website;
      }
      var updateImage = function(event) {
          var output = document.getElementById('card_image');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
              URL.revokeObjectURL(output.src) // free memory
          }
      };
  </script>
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