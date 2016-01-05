<link style="text/css" src="Otr.css" />
<?php
session_start();
error_reporting(0);
$user=$_SESSION['username'];
if($user)
{
	if($_POST['submit'])
	{
		$oldpassword=md5($_POST['oldpassword']);
		$newpassword=md5($_POST['newpassword']);
		$repeatnewpassword=md5($_POST['repeatnewpassword']);
		
		include('connect.php');
		$queryget=mysql_query("SELECT password FROM users WHERE username='$user'") or die("Query din't work");
		$row=mysql_fetch_assoc($queryget);
		
		$oldpassworddb=$row['password'];
		if($oldpassword==$oldpassworddb)
		{
			if($newpassword==$repeatnewpassword)
			{
					$querychange=mysql_query("UPDATE users SET password='$newpassword' WHERE username='$user'");	
					session_destroy();
					die("Your password has been changed .<a href='index.php'>Return</a> to the main page");	
			}
			else
				die("New Password  doesn't match");
		}
		else
			die("Old password doesn't match");
		
				
	}
	else
	
		echo "
			<form action='changepassword.php' method='POST'>
				<table>
				<tr >
				<td>Old password:</td><td><input class='width' type='password' name='oldpassword'></td>
				</tr>
				<tr>
				<td>New password:</td><td><input class='width' type='password' name='newpassword'></td>
				</tr>
				<tr>
				<td>ReEnter password:</td><td><input class='width' type='password' name='repeatnewpassword'></td>
				</tr>
				<tr>
				<td><input  type='submit' value='changepassword' name='submit'></td>
				</tr>
				</table>
			</form>	
			";
}
else
	die("You must be logged in");
?>