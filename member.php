<?php

session_start();
					error_reporting(0);
					if($_SESSION['username'])
					echo "<p style='font-weight:bold'>Welcome, ".$_SESSION['username']."!</br><a href='logout.php'>Logout</a><br><a href='Home.php?page1=changepassword'>Change Password</a></p>";
					else
					die("You must be logged in!");
?>