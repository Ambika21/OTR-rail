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
<legend><h1><font><i>Reservation Form</i></font></h1></legend>
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
<td>Address:</td>
<td><input size="20" type="text"></td>



</tr><tr><td>Age:</td>
<td><input size="5" type="text"></td>
<td></td>
<td></td>
<td>Email Id:</td>
<td><input size="20" type="text"></td>
</tr>
</tbody></table>
</p>

<br><br><br>


<i><b style="color:grey">Reservation Information</b></i>
<p><hr/><br><br>
<table width="80%">
<tbody><tr>
<td>From:</td>
<td><input size="20" type="text"></td>

<td></td>
<td></td>
<td>To:</td>
<td><input size="20" type="text"></td>
</tr>


<tr><td>Class:</td>
<td><select name="abc">
  <option selected="selected" value="">Select class</option>
<option value="1A">AC First Class (1A)</option>
<option value="2A">AC 2 Tier (2A)</option>
<option value="3A">AC 3 Tier (3A)</option>

<option value="CC">AC Chair Car (CC)</option>
<option value="FC">First Class (FC)</option>
<option value="SL">Sleeper (SL)</option>
<option value="2S">Second Sitting (2S)</option>              </select></td>
<td></td>
<td></td>
<td>Date:</td>

<td><input size="20" type="text"></td>




</tr><tr><td>Adults:</td>
<td>
              <select name="train_adults">
                                <option value="0">0</option>
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

              </select></td>
<td></td>
<td>
</td>

<td>Children:</td>
<td>
  
			  <select name="abc">
  <option value="0" selected="selected">0</option>
<option value="1A">1</option>
<option value="2A">2</option>
<option value="3A">3</option>

<option value="CC">4</option>
<option value="FC">5</option>
<option value="SL">6</option>             </select></td>
<td>
</td><td></td></tr>
<tr>
<td>
Senior Citizen(Men):</td>
<td>
              <select id="train_male_seniors" name="male_seniors" size="1">
                <option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

              </select></td>
			  <td></td>
			  <td></td>
			  <td>
			  Senior Citizen(Women):</td>
<td>
              <select id="train_female_seniors" name="male_seniors" size="1">
                <option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</td>
</tr>
<tr>
<td><br><input type="submit" name="Confirm" value="Confirm Reservation"></td>
</tr>

</tbody></table>
			  


</p>
</form></div>
</fieldset></div></body></html>