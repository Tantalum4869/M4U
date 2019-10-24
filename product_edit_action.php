<?php session_start(); ?><?
include('conn.php');

 if(isset($_POST['Save']))
 {
	
	$ide =$_POST['tid'];
	$typee = $_POST['type'];

	if($ide >= 8000){
		$t = umbrella;
	}else if($ide >= 7000){
		$t = tshirt;
	}else if($ide >= 6000){
		$t = suits;
	}else if($ide >= 5000){
		$t = sport;
	}else if($ide >= 4000){
		$t = pants;
	}else if($ide >= 3000){
		$t = jacket;
	}else if($ide >= 2000){
		$t = apron;
	}else if($ide >= 1000){
		$t = hat;
	}else if($ide >= 1){
		$t = polo;
	}
	function intserts($g) {
		$add =""; $del =""; 
	    $id =$_POST['tid'];
	    
		
		
			if($id >= 8000){
				$sel = umbrella;
			}else if($id >= 7000){
				$sel = tshirt;
			}else if($id >= 6000){
				$sel = suits;
			}else if($id >= 5000){
				$sel = sport;
			}else if($id >= 4000){
				$sel = pants;
			}else if($id >= 3000){
				$sel = jacket;
			}else if($id >= 2000){
				$sel = apron;
			}else if($id >= 1000){
				$sel = hat;
			}else if($id >= 1){
				$sel = polo;
			}
		

		

			$add ="INSERT INTO $g(Img,Name,Description,Color) SELECT Img,Name,Description,Color FROM $sel WHERE ID = $id";
			$del ="DELETE FROM $sel WHERE ID = $id";
		

			$result = mysql_query($add)or die(mysql_error());
			$result1 = mysql_query($del)or die(mysql_error());
			if($result1) {
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			}else{
			echo "<script>alert('Update Failed');</script>";
			}  

		}

	
	}
	 function update() {


		$update =""; 
		$images = $_FILES['changePic']['name'];
	   $ids =$_POST['tid'];
	   $names = $_POST['name'];
	   $dess = $_POST['des'];
	   $types = $_POST['type'];
	   $colors = $_POST['color'];
	   
	   
	  	 if($ids >= 8000){
			$w = umbrella;
		}else if($ids >= 7000){
			$w = tshirt;
		}else if($ids >= 6000){
			$w = suits;
		}else if($ids >= 5000){
			$w = sport;
		}else if($ids >= 4000){
			$w = pants;
		}else if($ids >= 3000){
			$w = jacket;
		}else if($ids >= 2000){
			$w = apron;
		}else if($ids >= 1000){
			$w = hat;
		}else if($ids >= 1){
			$w = polo;
		}
		   
		  
	
		if($_FILES['changePic']['name']!="")
		{
			$target = "productimg/".basename($images);
			move_uploaded_file($_FILES['changePic']['tmp_name'], $target);
			$update ="UPDATE $w SET Name='$names',Description='$dess',Color='$colors',Img='$images' WHERE ID=$ids";	
		  }
		else {
			$update ="UPDATE $w SET Name='$names',Description='$dess',Color='$colors' WHERE ID=$ids ";
			}
		$result2 = mysql_query($update)or die(mysql_error());
	 
	}	
	
	
	switch ($typee) {
		case 1: update();
			if($t != polo){
			intserts(polo); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			
			break;
		case 2:update();
			if($t != apron){
			intserts(apron); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";

			break;
		case 3:update();
			if($t != hat){
			intserts(hat); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;
		case 4:update();
			if($t != pants){
			intserts(pants); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;	
		case 5:update();
			if($t != sport){
			intserts(sport); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;
		case 6: 
			update();
			if($t != suits){	
			intserts(suits); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;
		case 7:update();
			if($t != tshirt){
			intserts(tshirt); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;
		case 8:update();
			if($t != umbrella){
			intserts(umbrella); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;
		case 9:update();
			if($t != jacket){
			intserts(jacket); }
			echo "<script>alert('Update Successful');window.location.href='product_admin.php';</script>";
			break;		
		
		default:
			exit;


		
	



		
		}
?>
