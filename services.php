<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>บริการ</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
	  #dorp{
		  color: #FFFFFF;
	  }

   
    /* Popup container - can be anything you want */
    .popup {
      position: relative;
      display: inline-block;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    /* The actual popup */
    .popup .popuptext {
      visibility: hidden;
      width: 160px;
      background-color: #555b;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }
    
    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }
    
    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }
    
    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {opacity: 0;} 
      to {opacity: 1;}
    }
    
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity:1 ;}
    }
    
  </style>
</head>

<body>

  <!-- Navbar -->
  <?php include_once('header.php'); ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>



<main>
<section>
<div class="container">
<div class="row justify-content-md-center">
  
    <div class="col-6">
      <div class="card" style="width: 34rem;">
        <img src="img\cover\bg1.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col-4">
    <div class="card" style="width: 16rem; height:auto">
        <img src="img\cover\bg2.jpg" class="card-img-top" alt="...">
      </div>
      <br>
      
      <div class="card" style="width: 16rem;">
        <img src="img\cover\bg3.jpg" class="card-img-top" alt="...">
      </div>
    </div>
    
  </div>
<br>
<h1 class="text-center my-3">บริการ</h1>
<hr class="my-5">
</div>
</section>
</main>






<!-- Footer -->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">M4U</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">Menu</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">หน้าแรก</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">สินค้า</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">บริการ</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">เกี่ยวกับเรา</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ระบบ Admin</a>
            </p>
          </li>			
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">ติดต่อเรา</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> เลขที่ 2316 ถนนประชาสงเคราะห์ แขวงดินแดง เขตดินแดง กทม. 10400</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> xxxx@xxxxx.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> xxx xxx xxxx</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> xx xxx xxx</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-twitter"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus">
          <i class="fab fa-google-plus-g"></i>
        </a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href=""> M4U.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->	
	
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
