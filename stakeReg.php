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
<center>
<div class="container" >
<h1>Sign Up</h1>
  <form action="index.php" method="post">
    <label for="name">User Name</label>
    <input type="text" id="name" name="name" placeholder="Name" required >
	<br>
	<label for="brand">E-mail</label>
    <input type="email" id="email" name="email" placeholder="E-mail" >
	<br>
	<label for="quantity">Password</label>
    <input type="password" id="password" name="********" placeholder="Password" required>
	<br>
    <label for="message">Category</label>
	<select>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="acountant">Accountant</option>
            <option value="lab assistant">Lab assistant</option>
			<option value="housekeeping">Housekeeping</option>
    </select>
	<br>
	<label for="message">Dept</label>
	<select>
            <option value="cmpn">Computer</option>
            <option value="inft">IT</option>
            <option value="inst">Instrumentation</option>
            <option value="extc">EXTC</option>
			<option value="etrx">Electronics</option>
    </select>
	<br>
	<input class="input-checkbox100" id = "ckb1" type="checkbox" name = "remember-me">
	<label class="label-checkbox100" for="ckb1">
	<span class="txt1">
	I agree to the
	<a href="#" class="txt2 hov1">
	Terms of User</a>
	</span>
	</label>
	</div>
	<input type="submit" value="Sign up" style="background-color: #01a84f ; color:white; font-size:20px;"> 
	<br>
  </form>
</div>

</center>
</body>
</html>
