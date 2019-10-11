<?php session_start(); ?><?
include('conn.php');

 if(isset($_POST['Save']))
 {
	
	$id =$_POST['tid'];
	$name = $_POST['name'];
	$des = $_POST['des'];
	$type = $_POST['type'];
	$color = $_POST['color'];
	$typee = $_POST['type'];
	
	 function update() {


		$update =""; 
		$images = $_FILES['changePic']['name'];
	   $ids =$_POST['tid'];
	   $names = $_POST['name'];
	   $dess = $_POST['des'];
	   $types = $_POST['type'];
	   $colors = $_POST['color'];
	   
	   
	   switch ($types) {
		   case 1:
			   $w = polo;
			   break;
		   case 2:
			   $w = apron;
			   break;
		   case 3:
			   $w = hat;
			   break;
		   case 4:
			   $w = pants;
			   break;	
		   case 5:
			   $w = sport;
			   break;
		   case 6:
			   $w = suits;
			   break;
		   case 7:
			   $w = tshirt;
			   break;
		   case 8:
			   $w = umbrella;
			   break;
		   case 9:
			   $w = jacket;
			   break;		
		   
		   default:
			   exit;
	   }
		if(isset($_FILES['changePic']['name'])&&($_FILES['changePic']['name'])!="")
		{
			// Delete Old pic
			$target = "productimg/".basename($image);
			move_uploaded_file($_FILES['changePic']['tmp_name'], $target);
		
			$update ="UPDATE $w SET Name='$names',Description='$dess',Color='$colors',Img='$images' WHERE ID=$ids";	
			
		  }
		else {
			$update ="UPDATE $w SET Name='$names',Description='$dess',Color='$colors' WHERE ID=$ids ";
			
			}
		
		$result2 = mysql_query($update)or die(mysql_error());
		 
		
	}	
	function intserts($g) {
		$add =""; $del =""; 
		$image = $_FILES['changePic']['name'];
	    $id =$_POST['tid'];
	    $name = $_POST['name'];
	    $des = $_POST['des'];
	    $type = $_POST['type'];
		$color = $_POST['color'];
		
		
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
			echo "<script>alert('Update Successful');window.location.href='product.php';</script>";
			}else{
			echo "<script>alert('Update Failed');</script>";
			}  

		}

	
	}
	
	

	switch ($typee) {
		case 1: update();
			intserts(polo); 
			
			break;
		case 2:update();
			intserts(apron); 
			
			break;
		case 3:update();
			intserts(hat); 
			
			break;
		case 4:update();
			intserts(pants); 
			
			break;	
		case 5:update();
			intserts(sport); 
			
			break;
		case 6:update();	
			intserts(suits); 
				
			break;
		case 7:update();
			intserts(tshirt); 
			
			break;
		case 8:update();
			intserts(umbrella); 
			
			break;
		case 9:update();
			intserts(jacket); 
			
			break;		
		
		default:
			exit;


		
	



		
		}
?>
