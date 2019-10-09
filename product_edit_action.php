<?php session_start(); ?><?
include('conn.php');

 if(isset($_POST['Save']))
 {
	 $types = $_POST['type'];
	
	 function update() {


		$update =""; 
		$image = $_FILES['changePic']['name'];
	   $id =$_POST['tid'];
	   $name = $_POST['name'];
	   $des = $_POST['des'];
	   $type = $_POST['type'];
	   $color = $_POST['color'];
	   
	   
	   switch ($type) {
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
		
			$update ="UPDATE $w SET Name='$name',Description='$des',Color='$color',Img='$image' WHERE ID=$id";	
			
		  }
		else {
			$update ="UPDATE $w SET Name='$name',Description='$des',Color='$color' WHERE ID=$id ";
			
			}
		
		$result2 = mysql_query($update)or die(mysql_error());
		 
		if($result2) {
			echo "<script>alert('Update Successful');window.location.href='product.php';</script>";
		}else{
			echo "<script>alert('Update Failed');</script>";
		}  
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
	
	update();

	switch ($types) {
		case 1: intserts(polo); 
			
			break;
		case 2:intserts(apron); 
			
			break;
		case 3:intserts(hat); 
			
			break;
		case 4:intserts(pants); 
			
			break;	
		case 5:intserts(sport); 
			
			break;
		case 6:intserts(suits); 
				
			break;
		case 7:intserts(tshirt); 
			
			break;
		case 8:intserts(umbrella); 
			
			break;
		case 9:intserts(jacket); 
			
			break;		
		
		default:
			exit;


		
	



		
		}
?>
