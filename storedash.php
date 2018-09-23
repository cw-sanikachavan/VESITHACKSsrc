<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vest-Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
        .head{
  width: auto;
  margin:0px;
  color: white;
  background:  #01a84f;
  background-size: 5%;
  text-align: left ;
  padding: 3px;
  }
  .nav{
  margin:0px 0px;
  padding: 0px 0px;
  color:white;
  width:auto;
  height:50px;
  border: 1px solid #dddddd;
  background-color: #01a84f ;
  }
  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: slateblue;
    color: white;
    font-size: 17px;
    border: 1px solid slateblue;
    border-left: none;
    cursor: pointer;
}
.nav ul{
    margin: auto;
    padding: 15px;
    list-style-type: none; 
    
  }
  .nav a.active {
    background-color: white;
  }
  
  .nav li{
    display: inline;
    margin-left:0;
    padding: 14px 16px;
    font-size: 20px;
  }
  .nav li a{
    color: white;
    padding-right: 8px;
    text-decoration:none;
    border-radius: 4px;
  }
  .nav li a:hover {
    background-color: #03FDC4;
    color: white;
  }
  .p{
    width: 100px;
     height:50px;
     
  }

        </style>
        <!-- YE NEECHE WALA CODE COMMENT KIYA HAI JUST FOR SOMETIME SO THAT SANIKA CAN DO HER CHANGES, 
        PLEASE UNCOMMENT AND CHECK WHETHER IT WORKS WITH SANIKA KA CODE. @REEMA--> 
         <!--<?php
	$host = "localhost";
	$user = "user123";
	$password="pass";
	$databaseName = "asset_management";
	$connect = mysqli_connect($host,$user,$password,$databaseName);
	?>
	</head>
	<body>
		<div class="container" >
		<center>Current transfer queries and their status</center>
		<div>
			<form  action="transfer_form.php" style="margin-left:20px;margin-top:14px;" class="container">
				
		<?php
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$q="SELECT * FROM product ";
$r=mysqli_query($db,$q);
$list1=mysqli_fetch_assoc($r);
if($list1!=""){
echo "<div><center>
No. of items available:
</center></div>";	}
else{
    echo "<center>NO QUERIES</center>";} 
   /* while($list1!=""){
        echo " " . $list['availability'] ;
        $connect->close();*/
    ?>
    </form>
</div>-->

    <div class="head">
        <h1>VESIT</h1>
</div>
<div class="nav">
    <nav>
    <ul>
        <li>Transfer Assets</li>
        <li>Discard Assets</li>
        <li>Current availability of assets</li>
</ul>
</nav>
</div>
<div class="p">
<h1 style="position: absolute; right:540px;">Welcome to the Store!</h1><br><br>
<!--<h2 style="position: absolute; right:550px;">Search for the product:</h2><br>-->
<!--<a href="#.php"><button type="submit" style="position: absolute; right:650px;top:250px;color:white;background-color:#01a84f" class="p" name="login_user">Current availability of assets</button></a>-->
</div>
<center>
<div class="container" >
<h1>Search for the product:</h1>
  <form action="mail.php" method="post">
	<label for="name">Product name</label>
    <input type="text" id="name" name="name" placeholder="Product name" required >
	<br>
	<label for="brand">Brand</label>
    <input type="text" id="brand" name="brand" placeholder="Brand" >
	<br>
	<label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
	<br>
    <label for="message">Category</label>
	<select>
            <option value="stationary">Stationary</option>
            <option value="electronics">Electronics</option>
            <option value="hardware">Hardware</option>
            <option value="cleaning assets">Cleaning Assets</option>
			<option value="other">Other</option>
    </select>
	<br><input type="submit" value="Submit" style="background-color: #01a84f ; color:white; font-size:20px;"> 
  </form>
</div>

</center>

</body>
</html>