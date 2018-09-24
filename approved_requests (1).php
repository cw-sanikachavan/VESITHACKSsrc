<?php
$host = "localhost:8080";
$user = "user123";
$password="pass";
$databaseName = "asset_management";
$connect = mysqli_connect($host,$user,$password,$databaseName);
$q="SELECT * FROM request_query WHERE status='approved'";
$r=mysqli_query($connect,$q);
if($r){
		$list1=mysqli_fetch_assoc($r);
		$department=$list1['department'];
		$request_no=$list1['requestno'];
		$ID=$list1['ID'];
		$name_of_item=$list1['name'];
		$quantity=$list1['quantity'];
		}
?>
		