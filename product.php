<?php session_start(); 
$_SESSION['num'] = 2;?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">


  <script src="js/jquery-1.10.2.min1.js"></script>
    <script src="js/jquery-ui1.js"></script>
    <script src="js/bootstrap.min1.js"></script>
  <title>สินค้า</title>
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
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
	  #dorp{
		  color: #FFFFFF;
	  }
      #center {
        align-items: center;
        width:60%;
}
  </style>
</head>

<body>


<?php include_once('header.php');
 ?>
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
                  <strong>สินค้า<br></strong>PRODUCTS
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
                <strong>สินค้า<br></strong>PRODUCTS
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
                <strong>สินค้า<br></strong>PRODUCTS
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

  <!--Main layout-->
  



  <div class="input-group md-form form-sm form-1 pl-0" style="margin-left: 1100px; width: 300px;margin-bottom: 5px;">
                      
                      <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" id="search_text">
                    <div class="input-group-prepend" >
                      <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-black-50"
                        aria-hidden="true"></i></span>
                      </div>
                    </div>

  <div class="container">
        <div class="row">
        	
            <div class="col-md-2">                				
					
                <div class="list-group">
					<h3>ประเภท</h3>
                    <div style="height: 580px; overflow-y: auto; overflow-x: hidden;">
                    <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="alls" id="0" onclick="myFunction('0')" checked  >ทั้งหมด </label></div>
                    <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="polo" id="1" onclick="myFunction('1')"  >เสื้อโปโล </label></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="hat" id="2" onclick="myFunction('2')"  >หมวก</label><br /></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="apron" id="3" onclick="myFunction('3')"  >ผ้ากันเปื่อน</label><br /></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="jacket"  id="4" onclick="myFunction('4')" >เสื้อแจ็คเก็ต</label><br /></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="pants" id="5" onclick="myFunction('5')"  >กางเกง</label><br /></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="sport" id="6" onclick="myFunction('6')"  >เสื้อกีฬา</label><br /></div>
                        <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="suits" id="7" onclick="myFunction('7')"  >ชุดสูท</label><br /></div>
                        <div class="list-group-item checkbox">
                       <label><input type="radio" name="a" class="common_selector brand" value="tshirt"  id="8" onclick="myFunction('8')" >เสื้อยืด</label><br /></div>
                       <div class="list-group-item checkbox">
                        <label><input type="radio" name="a" class="common_selector brand" value="umbrella" id="9" onclick="myFunction('9')" >ร่ม</label></div>
                    
                    
                    </div>
                </div>

			
				
            </div>
            <div  class="col-md-8">
            <center>   <section>
                   
                         
                      
                          <div class="row filter_data" id="result">
                      </div> 
                            
                                     
            
                       
                  
                       </div>
                    </div>
                  </div>
                </section>
           
        </div>
        </center>
    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
data();
function data(){
load_data();
    
    function load_data(query)
    {
     $.ajax({
      url:"load_product.php",
      method:"POST",
      data:{query:query},
      success:function(data)
      {
       $('#result').html(data);
      }
     });
    }
    $('#search_text').keyup(function(){
     var search = $(this).val();
     if(search != '')
     {
      load_data(search);
     }
     else
     {
      load_data();
     }
    }); }
function myFunction(p) {

  
  function filter_data($s)
{
   
    $('.filter_data').html('<div id="loading" style="" ></div>');
    var action = 'fetch_data';
    $.ajax({
        url:$s,
        method:"POST",
        data:{action:action},
        success:function(data){
            $('.filter_data').html(data);
        }
      
    });
}


if(p==0){
    $(document).ready(function(){
      data();
});

   }
   if(p==1){
    $(document).ready(function(){
filter_data("fetch_data.php");
});

   }
   if(p==2){
    $(document).ready(function(){
      filter_data("fetch_data1.php");
});
   }
   if(p==3){
    $(document).ready(function(){
filter_data("fetch_data2.php");
});
   }
   if(p==4){
    $(document).ready(function(){
filter_data("fetch_data3.php");
});
   }if(p==5){
    $(document).ready(function(){
filter_data("fetch_data4.php");
});
   }if(p==6){
    $(document).ready(function(){
filter_data("fetch_data5.php");
});
   }if(p==7){
    $(document).ready(function(){
filter_data("fetch_data6.php");
});
   }if(p==8){
    $(document).ready(function(){
filter_data("fetch_data7.php");
});
   }
   if(p==9){
    $(document).ready(function(){
filter_data("fetch_data8.php");
});
   }
   }


</script>

</body>

</html>
