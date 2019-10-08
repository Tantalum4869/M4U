<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ประวัติ</title>
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
    .bg1{
      background-color:#e0ebeb;
    }
    
  </style>
</head>

<body>

<?php include_once('header.php'); ?>
  
  <!-- Card -->
<div class="card card-cascade wider reverse">

    <!-- Card image -->
    <div class="view view-cascade overlay">
      <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  
    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">
  
      <!-- Title -->
      <h4 class="card-title"><strong>ประวัติ</strong></h4>
      <!-- Subtitle -->
      <h6 class="font-weight-bold indigo-text py-2">บริษัท</h6>
      <!-- Text -->
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
      </p>
    </div>
  
    <hr class="my-5">
  
    
  <!-- Card -->
  
   <div class="container">
   <h1 class="" >ส่วนหนึ่งของลูกค้าที่ไว้วางใจเรา</h1>
     <!-- Card deck -->
<div class="card-deck">

    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="img/custom/custom1.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck --><!-- Card deck -->

<div class="card-deck">

    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Card title</h4>
        <!--Text-->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck -->
   </div>

   
<?php include_once('footer.php'); ?>	
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
