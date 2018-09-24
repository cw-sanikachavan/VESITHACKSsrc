<?php
	if(isset($_POST['submitted'])){
		$q="DELETE FROM `product` WHERE ID=".$_POST['id'];
		$r=mysqli_query($connect,$q);
		if($r){
			echo "<alert alert-success><center><h3>Deleted</h3></center></alert>";
			
		}else{
			echo mysqli_error($connect)."<br>querry:".$q;
		}
	}
	header("Location: discard.php");
	?>