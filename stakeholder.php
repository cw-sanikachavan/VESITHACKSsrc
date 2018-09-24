<!DOCTYPE html>
<html>
<head>
<title>Stakeholder</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.w3-button {width:150px;}
  div {
  display:block;
    border: 1px solid black;
    padding-top: 40px;
    padding-right: 20px;
    padding-bottom: 30px;
    padding-left: 50px;
	width:50%;
	margin-left:25%;
}
.logoutLblPos{

   position:fixed;
   right:400px;
   top:100px;
}
.button{
	float:right;
}
h3 {
    margin-left:10%;
	}

</style>
</head>
<body>
<br><br><br>
 <h1 style="text-align:center;">Stakeholder</h1>
 <br><br><br>

 <div>
  <form  align="center "name="form1" method="post" action="log_out.php">

 <!-- <label class="logoutLblPos">-->

  <input name="submit2" class="button" type="submit" id="submit2" value="Log Out" style="background-color:#01a84f;" >
  <br>
    <h3>Request Order:</h3>
	<br>
      <input type="text" align="center" name="requestedorder" placeholder="Request order"><br><br>
	  <input type="submit" value="Add Request" name="addrequest" style="background-color:#01a84f;">
<br><br>

 <!-- </label>-->
 
</form>
</div>
</body>  