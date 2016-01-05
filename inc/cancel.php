<?php 
session_start();
error_reporting(0);
if(!$_SESSION['username'])
die("<span style='color:red'>You must be logged in</span>");
?><html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>Reservation Form</title>
<style>
#main
{
margin-left:200px;
margin-bottom:50px;
margin-right:200px;
margin-top:70px
}
#inner
{
margin-left:30px;
margin-right:30px;
}


</style>

</head>
<body>
<div id="main">


<fieldset style="color:#85020B">
<legend><h1><font><i>Cancellation Form</i></font></h1></legend>
<div id="inner">
<form action="">

<p><br><br>
<i><b style="color:grey">Personal Information</b></i>
<hr/><br><br>
<table width="80%">
<tbody><tr>
<td>First Name:</td>
<td><input size="20" type="text"></td>

<td></td>
<td></td>
<td>Last Name:</td>
<td><input size="20" type="text"></td>
</tr>


<tr><td>Phone No.:</td>
<td><input size="20" type="text"></td>
<td></td>
<td></td>
<td>Email Id:</td>
<td><input size="20" type="text"></td>
</tr>
</tbody></table>
</p>

<br><br><br>


<i><b style="color:grey">Cancellation Information</b></i>
<p><hr/><br><br>
<table width="80%">
<tbody><tr>
<td>Train PNR no.</td>
<td><input size="20" type="text"></td>
</tr>
<tr>
<td>Fare:</td>
<td><input size="20" type="text"></td>
</tr>
<tr>
<td><br><input type="submit" name="Confirm" value="Confirm Cancellation"></td>
</tr>
</tbody></table>
			  


</p>
</form></div>
</fieldset></div></body></html>