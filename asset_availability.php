<?php
function available($name){
$host = "localhost:8080";
$user = "user123";
$password="pass";
$databaseName = "asset_management";
$connect = mysqli_connect($host,$user,$password,$databaseName);
$q="SELECT quantity FROM product WHERE name= ".$name;
$r=mysqli_query($connect,$q);
if($r){
		$list1=mysqli_fetch_assoc($r);
		$q=$list1['quantity'];
		if($q==0)
			return false;
		else
			return true;
		
		}
}
?>
		