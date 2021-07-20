<?php
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portfolio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link href="admin/assets/css/menu.css" rel="stylesheet" type="text/css" />

  <link href="css/nav.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/start-page.css" rel="stylesheet" type="text/css" />

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>

  <!-- Page Content -->

  <div class="container">

    <div class="card-white">

      <div class="row banner-content">
        <div class="col-md-6">
          <div class="controller">
            <ul class="card-white">
              <li>
                <p data-aos="zoom-in" style="margin: auto; color: #eee; text-align: justify; font-size: 14px">Hi, this is Nafi Mahmud, a new web-developer. I've completed my graduation from American International University-Bangladesh. I've decided to lead my career towards web-development sector. So day by day I'm preparing and sharpening myself. I'm a quick learner and interested to explore into new topic of web-development sector. I've learnt HTML, CSS, PHP, Javascript, MySQL, MSSQL Language. I've gathered knowledge & experience on PHP framework Laravel, Node.js V8 Engine as Back-End Application. For the Front-End side I've chosen React JS Library and rectified myself init. I know properly how to pass the data from Back-End to Front-End through REST-API. I've mastered on JQuery, Ajax also. So As a fresher I'm pretty much confident about myself. You can hire me anytime.</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div data-aos="flip-up" class="banner-box">
            <h1>Welcome<br> to<br> <span style="color: orange">NAFI<span style="color: yellow">.</span style="color: orange">COM<span style="font-size: 25px; color: #00E9FF"> BLOG</span></span></h1>
            <a class="link" style="text-decoration: none; letter-spacing:5px; margin-left:1px" href="main.php">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

  <!-- Active js -->
  <script src="js/active.js"></script>

</body>

</html>