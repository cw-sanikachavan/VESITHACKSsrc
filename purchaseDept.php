<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.nav-pills>li.active>a,
.nav-pills>li.active>a:focus,
.nav-pills>li.active>a:hover {
   background-color: #01a84f;
}
</style>
</head>
<body>

<div class="container">
  
  <h3>Purchase Department</h3>
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li class="active"><a data-toggle = "pill" href="#Order">Order</a></li>
    <li><a data-toggle = "pill" href="#ApprovedRequest">Approved Requests</a></li>
    <li><a data-toggle = "pill" href="#PendingRequest">Pending Requests</a></li>
    <li><a data-toggle = "pill" href="#Invoices">Invoices</a></li>        
  </ul>
<div class="tab-content">
    <div id="order" class="tab-pane fade in active">
      <h3>Place Order</h3>
      <center>
<div class="container" >
<h1>Order Request</h1>
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
	<input type="submit" value="Verify And Continue" style="background-color: #01a84f ; color:white; font-size:20px;"> 
	<br>
  </form>
</div>

</center>
    </div>
    <div id="ApprovedRequest" class="tab-pane fade">
      <h3>Find the Approved requests here</h3>
      <?php
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$q="SELECT * FROM request WHERE ststus='approved' ";
$r=mysqli_query($db,$q);
$list1=mysqli_fetch_assoc($r);
if($list1!=""){
echo "<div id='table'><center><table border=1>
  <tr>
    <th>Request ID</th>
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
    <div id="PendingRequest" class="tab-pane fade">
      <h3>Pending Requests</h3>
      <?php
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$q="SELECT * FROM request WHERE ststus='pending' ";
$r=mysqli_query($db,$q);
$list1=mysqli_fetch_assoc($r);
if($list1!=""){
echo "<div id='table'><center><table border=1>
  <tr>
    <th>Request ID</th>
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
    <div id="Invoices" class="tab-pane fade">
      <h3>Invoices of previous Transactions.</h3>
      <p></p>
    </div>
  </div>
</div>

</body>
</html>
