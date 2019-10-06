<?php session_start(); ?><?
include('conn.php');

 
	 	$delete ="";
		$id =$_POST['tid'];
		
		
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
	
		$delete =" DELETE FROM $w WHERE $w.ID = $id";
		
		
	
	$result = mysql_query($delete)or die(mysql_error());
	 
	if($result) {
		echo "<script>alert('delete Successful');window.location.href='product.php';</script>";
	}else{
		echo "<script>alert('delete Failed');</script>";
	}

 }
?>
