<?php

error_reporting(0);
//form data
$submit=$_POST['submit'];
$fullname=strip_tags($_POST['fullname']);
$username=strtolower(strip_tags($_POST['username']));
$email=(strip_tags($_POST['email']));
$password=strip_tags($_POST['password']);
$repeatpassword=strip_tags($_POST['repeatpassword']);
$gender=$_POST['gender'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob=date("$year-$month-$day");
$date=date("Y-m-d");
$accept=$_POST['accept'];
if($submit)
{
	//open database
	include("connect.php");
	
	$namecheck=mysql_query("SELECT username FROM users WHERE username='$username'");
	$count=mysql_num_rows($namecheck);
	if($count!=0)
	{
	die("* Username already taken");
	}
	//check for existence
	if(!$accept)
  { die("<span style='color:red'>Please accept our Terms and Conditions To Register with OTR</span>");}
	if($date&&$fullname&&$username&&$password&&$repeatpassword&&$email&&$gender&&$dob)
	{
		
		if($password==$repeatpassword)
		{
			
		//check char length of username and fullname
			if(strlen($username)>25||strlen($fullname)>25)
			{
			 echo "<span style='color:red'>Max limit for username/fullname are 25 	character</span>";
			}
			else
			{
			 //check password length
			 if(strlen($password)>25||strlen($password)<6)
			  {
			  	echo "<span style='color:red'>Password must be between 6 and 25 character</span>";
			  }
			  else 
			  {
			  	//encrypt password
				$password=md5($password);
				$repeatpassword=md5($repeatpassword);
		
			  	//register the user!
				
				$queryregister=mysql_query("INSERT into users VALUES('','$fullname','$username','$email','$password','$gender','$dob','$date')");
				die("<div><H1><span style='color:red'>Registerd User!</span><a href='index.php'> Return to login page</a></H1></div>");
				
			  }
			}
		}
		else 
		{echo "<span style='color:red'>Passwords do not match</span>";}
	}
	
	
	else 
		echo "<span style='color:red'>Fill in all details</span>";
}

?>
<html>
<head>
<script type="text/javascript" src="validate.js"></script>
<TITLE>
Signup</title>
</HEAD>
<body>
<div style="margin-left:250; margin-right:140;">
<div><img src="images3/indian_railway_5.jpg" width="206" height="115"></div>
<br/>
<div style="color:#82050B; font-size:20px " ><br/>OTR Registration Form</div>
<br/>
<hr/>

<div  font-size:14px">
<form action='registr.php' name="myform" method='POST' onsubmit="return validateForm()">
<table style="color:#667">

<tr>
	<td>Full Name:<BR><BR></td>
    <td><input type="text" name='fullname' value='<?php echo $fullname ?>'><BR><BR></td>
</tr>
<tr>
	<td>Username:<BR><BR></td>
    <td><input type="text" name='username' value='<?php echo $username ?>'><BR><BR></td>
</tr>
<tr>
	<td>Email Id:<BR><BR></td> 
	<td><input type="email" name='email' value='<?php echo $email ?>'><BR><BR></td>
</tr>
<tr>
	<td>Password:<BR><BR></td>
	<td><input type='password' name='password'><BR><BR></td>
</tr>
<tr>
	<td>Re Enter Password:<BR><BR></td>
	<td><input type='password' name='repeatpassword'><BR><BR></td>
</tr>
<tr><td>Gender:</td>
<td>
<select name='gender' value='male'>
<option>Male</option>
<option>Female</option></select><br>
</td>
</tr>
<tr><td>Date Of Birth:</td>
<td>
<SELECt name='day' value='1'>
<OPTION>1</OPTION>
<OPTION>2</OPTION>
<OPTION>3</OPTION>
<OPTION>4</OPTION>
<OPTION>5</OPTION>
<OPTION>6</OPTION>
<OPTION>7</OPTION>
<OPTION>8</OPTION>
<OPTION>9</OPTION>
<OPTION>10</OPTION>
<OPTION>11</OPTION>
<OPTION>12</OPTION>
<OPTION>13</OPTION>
<OPTION>14</OPTION>
<OPTION>15</OPTION>
<OPTION>16</OPTION>
<OPTION>17</OPTION>
<OPTION>18</OPTION>
<OPTION>19</OPTION>
<OPTION>20</OPTION>
<OPTION>21</OPTION>
<OPTION>22</OPTION>
<OPTION>23</OPTION>
<OPTION>24</OPTION>
<OPTION>25</OPTION>
<OPTION>26</OPTION>
<OPTION>27</OPTION>
<OPTION>28</OPTION>
<OPTION>29</OPTION>
<OPTION>30</OPTION>
<OPTION>31</OPTION></select>
&nbsp;
<SELECt name='month' value='jan'>
<OPTION>1</OPTION>
<OPTION>2</OPTION>
<OPTION>3</OPTION>
<OPTION>4</OPTION>
<OPTION>5</OPTION>
<OPTION>6</OPTION>
<OPTION>7</OPTION>
<OPTION>8</OPTION>
<OPTION>9</OPTION>
<OPTION>10</OPTION>
<OPTION>11</OPTION>
<OPTION>12</OPTION>
</select>
&nbsp;
<SELECT name='year' value='1965'>
<OPTION>1965</OPTION>
<OPTION>1966</OPTION>
<OPTION>1967</OPTION>
<OPTION>1968</OPTION>
<OPTION>1969</OPTION>
<OPTION>1970</OPTION>
<OPTION>1971</OPTION>
<OPTION>1972</OPTION>
<OPTION>1973</OPTION>
<OPTION>1974</OPTION>
<OPTION>1975</OPTION>
<OPTION>1976</OPTION>
<OPTION>1977</OPTION>
<OPTION>1978</OPTION>
<OPTION>1979</OPTION>
<OPTION>1980</OPTION>
<OPTION>1981</OPTION>
<OPTION>1982</OPTION>
<OPTION>1983</OPTION>
<OPTION>1984</OPTION>
<OPTION>1985</OPTION>
<OPTION>1986</OPTION>
<OPTION>1987</OPTION>
<OPTION>1988</OPTION>
<OPTION>1989</OPTION>
<OPTION>1990</OPTION>
<OPTION>1991</OPTION>
<OPTION>1992</OPTION>
<OPTION>1993</OPTION>
<OPTION>1994</OPTION>
<OPTION>1995</OPTION>
<OPTION>1996</OPTION>
<OPTION>1997</OPTION>
<OPTION>1998</OPTION>
<OPTION>1999</OPTION>
<OPTION>2000</OPTION>
</select>
<td>
<br><br><br>
</tr>
<tr>
<td><textarea disabled="disable" >OTR Terms and services
</textarea><td></tr>



<tr>
<td>
<input type="checkbox" name='accept'>&nbsp;I accept all the Terms and conditions</input><br><br>
</td>
</tr>
<tr>
<td>
<br>
</td>
<td><input type="submit" name='submit' value="submit">&nbsp;&nbsp;
<input type="Reset" value="clear"></td>
</tr>
</table>
</form>
</div>
<hr/>
</div>
</body>
</html>
