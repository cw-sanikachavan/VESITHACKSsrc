<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>'
  <style>
  body {font-family: Comic Sans MS, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select {
    width: 100%;
    padding: 12px;
    border: 1px solid #01a84f;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #01a84f;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
	margin-top:20px;
	height:auto;
	width:50%;
    border-radius: 5px;
    background-color:white;
    padding: 20px;
	border: 1px solid #01a84f;
}
label {
	font-size:20px;
	float:left;
}
.nav-pills>li.active>a,
.nav-pills>li.active>a:focus,
.nav-pills>li.active>a:hover {
   background-color: #01a84f;
}
</style>
	<?php
	error_reporting(0);
	$host = "localhost";
	$user = "user123";
	$password="pass";
	$databaseName = "asset_management";
	$db = mysqli_connect($host,$user,$password,$databaseName);
	?>
</head>

<body>

<div class="container">
  <h3>Storage Department</h3>
  <ul class="nav nav-pills nav-justified" role="tablist">
<li class="active"><a data-toggle = "pill" href="#CurrentAvailability">Current Availabilty</a></li>
    <li><a data-toggle = "pill" href="#Transfer">Transfer products</a></li>
    <li><a data-toggle = "pill" href="#Discard">Discard unused products</a></li>
    <li><a data-toggle = "pill" href="#Invoices">Invoices</a></li>      
  </ul>
  <div class="tab-content">
  
    <div id="CurrentAvailability" class="tab-pane fade in active">
      <center>
		<div class="container" >
		<center><h1>Current Asset Availability</h1></center>
		<div>
				
		<?php
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$q="SELECT * FROM product ";
$r=mysqli_query($db,$q);
$list1=mysqli_fetch_assoc($r);
if($list1!=""){
echo "<div id='table'><center><table border=1>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th> 
    <th>Brand</th>
	<th>Category</th>
	<th>Quantity</th>
	<tr>
</tr></center>";	}
else{
	echo "<center>NO QUERIES</center>";
}
while($list1!=""){
echo "<tr>";
echo "<td>" . $list['ID'] . "</td>";
echo "<td>" . $list['name'] . "</td>";
echo "<td>" . $list['brand'] . "</td>";
echo "<td>" . $list['category'] . "</td>";
echo "<td>" . $list['quantity'] . "</td>";
echo "</tr>";
}
echo "</table><br>";
$db->close();
?>
		</div>
		</center>
    </div>
	
    <div id="Transfer" class="tab-pane fade">
      <?php
	if(isset($_POST['submitted'])){
		$q="INSERT INTO `transfer` (department,name,quantity,status) VALUES ('$_POST[dept]','$_POST[name]','$_POST[quantity]','$_POST[status]')";
		$r=mysqli_query($connect,$q);
		if($r){
			echo "<alert alert-success><center><h3>Added</h3></center></alert>";
			
		}else{
			echo mysqli_error($connect)."<br>querry:".$q;
		}
	}
	
	?>
<center>
<div class="container" >
<h1>Add Transfer query</h1>
  <form action="" method="post">
	<label for="dept">Department</label>
    <input type="text" id="dept" name="dept" placeholder="Department name" required >
	<br>
	<label for="name">Product name</label>
    <input type="text" id="name" name="name" placeholder="Product name" >
	<br>
	<label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
	<br>
	<label for="reason">Status</label>
    <input type="text" id="status" name="status" placeholder="Status of Transfer" required>
	<br>
    <input type="hidden" name="submitted" value="1" />
	<input type="submit" value="ADD" style="background-color: #01a84f ; color:white; font-size:20px;"> 
  </form>
</div>

</center>
    </div>

	<div id="Discard" class="tab-pane fade">
      <center>
<div class="container" >
<h1>Discard Assets</h1>
  <form action="mail.php" method="post">
    <label for="id">Product ID</label>
    <input type="text" id="id" name="id" placeholder="Product ID" required>
	<br>
	<label for="name">Product name</label>
    <input type="text" id="name" name="name" placeholder="Product name" required >
	<br>
	<label for="brand">Brand</label>
    <input type="text" id="brand" name="brand" placeholder="Brand" >
	<br>
	<label for="quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
	<br>
	<label for="reason">Reason for Dicarding</label>
    <input type="text" id="reason" name="reason" placeholder="Reason for Discarding" required>
	<br>
    <label for="message">Category</label>
	<select>
            <option value="stationary">Stationary</option>
            <option value="electronics">Electronics</option>
            <option value="hardware">Hardware</option>
            <option value="cleaning assets">Cleaning Assets</option>
			<option value="other">Other</option>
    </select>
	<input type="submit" value="Send mail to Purchase Managers" style="background-color: #01a84f ; color:white; font-size:20px;"> 
	<br><a href="fdiscard.php">OR Discard Directly?</a>
  </form>
</div>

</center>
    </div>
    <div id="availability" class="tab-pane fade">
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

    </div>
  </div>
</div>

</body>
</html>
