<?php session_start(); ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>คำถามที่พบบ่อย</title>
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

<?php include_once('header.php'); ?>
	<!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>คำถามที่พบบ่อย<br></strong>FAQ
                </h1>

              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>คำถามที่พบบ่อย<br></strong>FAQ
                </h1>

              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>คำถามที่พบบ่อย<br></strong>FAQ
                </h1>
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
  <br>

<div class="container">


    <button type="button" class="btn btn-info btn-lg btn-block" id="b1"onclick="showHideDiv1('divMsg')" ><b>1.ใช้เวลาผลิดนานไหม </b> </button> 
    <center><div id="divMsg" style=" height: 200; width: auto; text-align:left; display:none; boder" >
    <b>หลังจากคอนเฟิร์มแบบแล้วผลิต 15 - 30 วัน</b>
		
    </div><center>
    <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv2('divMsg2')" ><b>2.รับออกแบบเสื้อให้ด้วยไหม</b> </button> 
    <div id="divMsg2"style=" height: 200; width: auto; text-align:left; display:none; boder">
    <b>ทางร้านรับออกแบบเสื้อฟรี แค่ลูกค้าบอกความต้องการ</b>
		</div>
  <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv3('divMsg3')" > <b> 3.ขึ้นตัวอย่างก่อนผลิตงานจริงได้หรือไม่</b> </button> 
  <div id="divMsg3" style=" height: 200; width: auto; text-align:left; display:none; boder">
  <b>เราจะขึ้นตัวอย่างให้ฟรีหลังจากคอนเฟิร์มแบบที่จะผลิต</b>
		</div>
  <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv4('divMsg4')" > <b>4.ใช้ในการขึ้นตัวอย่างกี่วัน</b> </button> 
  <div id="divMsg4" style=" height: 200; width: auto; text-align:left; display:none; boder">
  <b>หลังจากคอนเฟิร์มแบบที่จะผลิตทางร้านจะใช้เวลา 1 สัปดาห์ในการขึ้นตัวอย่าง</b>
		</div>
  <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv5('divMsg5')" > <b>5.มีหน้าร้านไหม</b> </button> 
  <div id="divMsg5" style=" height: 200; width: auto; text-align:left; display:none; boder">
  <b>หน้าร้านของเราอยู่เยื้องกับซอย ประชาสงเคราะห์ 29 หรือเลขที่ 2316 ถนนประชาสงเคราะห์ แขวง/เขต ดินแดง กทม.</b>
		</div>
  <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv5('divMsg5')" > <b>6.ชำระเงินในช่องทางใดบ้าง</b> </button> 
  <div id="divMsg5" style=" height: 200; width: auto; text-align:left; display:none; boder">
  <b>สามารถผ่านเลขบัญชี 211-2-10654-3 ชื่อบัญชี : บจก. แมน ฟอร์ ยู 2012 ธนาคารทหารไทย จำกัด(มหาชน)</b>
		</div>
  <button type="button" class="btn btn-info btn-lg btn-block" onclick="showHideDiv6('divMsg6')" > <b>7.ช่องทางการสั่งติดต่อสอบถาม</b> </button> 
  <div id="divMsg6" style=" height: 200; width: auto; text-align:left; display:none; boder">
  <b>โทร. 098 394 6229 (คุณโม) E-mail. manforu2012@gmail.com , mo.chayapha@gmail.com</b>
		</div>
</div>

<br>
<br>






<script type="text/javascript">
			function showHideDiv1(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
            
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv2(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv2(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv2(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv3(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv4(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv5(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
    <script type="text/javascript">
			function showHideDiv6(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
<?php include_once('footer.php'); ?>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
