<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>E-Survey</title>

  <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" /> -->
  <!-- CSS ============================================= -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" /> -->
  <link rel="stylesheet" href="css/main.css" />

  <!-- Font Awesome v4.7.0 -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>

  </style>
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <?php  
      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
           $url = "https://";   
      else  
           $url = "http://";   
      // Append the host(domain name, ip) to the URL.   
      $url.= $_SERVER['HTTP_HOST'];   
      
      // Append the requested resource location to the URL   
      $url.= $_SERVER['REQUEST_URI'];    
    ?>
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $url; ?>">
          <img src="img/new-logo.png" alt="" height="55" width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="<?php echo $url; ?>">Home</a></li>
            <!-- <li><a href="about.html">About</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div> -->
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 home-banner-left" style="margin-top: -23%;">
          <h1 class="text-white">
            Take the first step <br />
            to start a survey
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Jadilah orang dengan ide-ide hebat. Survei memberi Anda wawasan yang dapat ditindaklanjuti dan perspektif baru.
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/survey3.png" alt=""/>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="mb-20" style="margin-top: 5%;">
    <!-- <div class="container-fluid">
      <div class="col-lg-3 col-md-6">
        <div class="feature-item d-flex">
          <i class="fa fa-file-text"></i>
          <div class="ml-20">
            <h4></h4>
          </div>
        </div>
        <ul class="list-group ml-20" style="margin-top: -2%;">
          <li class="list-group-item" style="border: none;color: #000000;"></li>
        </ul>
      </div>
    </div> -->
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area" style="position: fixed;  left: 0;  bottom: 0;  width: 100%;background-color:rgba(0, 0, 0, 0.1);border-top: 1px solid #dcdcdc;height: 40px;">
    <div class="text-center" style="padding-top: 0.5%;color: #000000;">
      <p style="font-size: 12px !important;">Copyright &copy;Pusdatinrenbang <?php echo date("Y"); ?></p>
    </div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> -->
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>