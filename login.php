<?php

session_start();
error_reporting(0);
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['value']=0;
if($username && $password)
{
$connect=mysql_connect("localhost","root","") or die("Couldn't connect");
mysql_select_db("phplogin")or die("Couldn't find database" );
$query = mysql_query("SELECT * FROM users  WHERE  username='$username' ");
$numrows = mysql_num_rows($query);

if($numrows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{   
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
	
	//check to see if they match
if($username==$dbusername && md5($password)==$dbpassword)
{
	echo " You are logged in click <a href='index.php'>here </a>to go to member page";
	$_SESSION['username']=$username;
	$_SESSION['value']=1;
	}
else
	echo "Incorrect Password !";
	
}
else 
	die("That user doesn't exist!");
}
else
	die("Please enter a username and password!");

?>