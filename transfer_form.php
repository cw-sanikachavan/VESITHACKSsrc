<html>
<head>
<title>Asset Management System</title>
<meta name="viewport" content="width=500, initial-scale=0.2">
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
</style>
</head>
<body>
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
</body>
</html>
