
<?php include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sermon Video</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
   <link href="video/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="video/css/3-col-portfolio.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Custom styles for this template -->
   <link href="css/business-casual.min.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="mainpage.html">Home</a></li>
          <li><a href="mainpage.html#about">About Us</a></li>
          <li><a href="mainpage.html#services">Services</a></li>
          <li class="menu-active"><a href="mainpage.html#portfolio">Our Sermon Videos</a></li>
          <li><a href="mainpage.html#team">Pastors</a></li>
          <li><a href="mainpage.html#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Making <span>your ideas</span><br>happen!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
    <!-- Page Content -->
    <section>
    <div class="container">
<?php

                  $result= $mysqli->query("SELECT * FROM videos") or die ($mysqli->error);
                  while ($row=$result->fetch_assoc() ){
                  $id=$row['id'];
                  ?>
      <!-- Page Heading -->
 <br>
      <div class="row">
        <div class="col-lg-4">
          <div class="card h-100">
            <video controls class="card-img-top" src="upload/<?php echo $row['location'];?>/700x400?>" alt=""></video>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $row ['tname']; ?></a>
              </h4>
              <p class="card-text">"<?php echo $row ['summary']; ?>"</p>
            </div>
          </div>
        </div>
      </div>

      <br>

      <!-- /.row -->
  <?php } ?>
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="video.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="video.php">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="video.php">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="video.php" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
  
    </div>
  </section>
    <!-- /.container -->

    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>
    <!-- Uncomment below if you want to use dynamic Google Maps -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
