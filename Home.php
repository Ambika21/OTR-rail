<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
   <head>
<script type="text/javascript" src="slider.js"></script>  
<link rel="shortcut icon" href="images3/img.jpg"/>
<title>ONLINE TICKET RESERVATION</title>
<link href="Otr.css" rel="stylesheet" type="text/css" media="screen" />
</head>
   <body onload="slideShow(0)">
   <div id="wrapper" >
	
    <div id="menu">
		<ul><li><a href="Home.php">Home</a></li>
            <li><a href="Home.php?page=enquiry">Enquiry</a></li>
			<li><a href="Home.php?page=reservation">Reservation</a></li>
			<li><a href="Home.php?page=aboutus">About Us</a></li>
			<li><a href="Home.php?page=contact">Contact Us</a></li>
		</ul>
	</div>
    <!-- end #menu -->
	
     <div id="header" >
	 <h1 align="right" ><a href="Home.html">Online Ticket Reservation</a></h1>
	 <img width=980px height=330px name="slideShow">
	 
   			
    </div>
	<div style="clear: both;">&nbsp;</div>
	<div style="clear: both;">&nbsp;</div>
    <!-- end #header -->
    <div id="page-bgbtm">
         <div id="content">
		   <div class="post">
		   <?php
				error_reporting(0);
				$section=$_GET['section'];
				$page=$_GET['page'];
			if($page)
			{
				
				if
				(
				
				!strpos($page,".")&& !strpos($page,"/ ")
				
				)
				{
				
					//check for section
					if(!$section)
					$section="inc";					 
					$path=$section."/".$page.".php";
					if(file_exists($path))
					{
						include($path);
					}
					else
					{
						echo "Sorry,that page does not exists";
					}
				}
				else
				{
					echo "Not allowed";
				}
			}
				else
				{
					include("inc/hom.php");
				}
				?>
           		
                
		   </div>
              
		 </div>
        </div>
   <div id="page">
	 <div id="page-bgtop">
	    
	   		<!-- end #content -->
     
          <div id="sidebar">
	         <ul>
		<li>
                     
	     	  <div id="search" > 
				<?php
				session_start();
				if(!$_SESSION['username'])
				{
				echo "
				<form method ='POST' action='login.php'>
					<div>
                   <table>
                    <tr><td>Username:</td>
                        <td><input type='text' name='username'/></td>
					</tr>
                    <tr><td>Password:</td>
                        <td><input type='password' name='password'/></td>
					</tr>
					</table>
                    </div>
                    <tr>
                     <td height=17>
                     </td>
                    </tr>
					<div id='buttons' class='form_row clearfix'>
                    </br>
                    <input value='Login' name='login' type='submit' />
                    &nbsp;or&nbsp; <strong><a href='registr.php'>Sign up </a></strong>
                   </div>
                    </form>               
				 ";
				
				 }
				else
				{
					error_reporting(0);
					$page1=$_GET['page1'];
					if($page1)
					{
				
						if
						(
				
						!strpos($page1,".")&& !strpos($page1,"/ ")
				
						)
						{
				
						//check for section
					 
							$path=$page1.".php";
							if(file_exists($path))
							{
								include($path);
							}
							else
							{
								echo "Sorry,that page does not exists";
							}
						}
						else
						{
							echo "Not allowed";
						}
			        }
					else
					{
					include('member.php');
					}
				}
	
				 ?>
	         </div> 
               <!--Login form ends-->      
				
					
                <div style="clear: both;">&nbsp;</div>
			    
		</li>
                
		<li>
				<h2 style="color:#82050B">ONLINE RESERVATION </h2>
				<p>A place where you are reserve your seats for journy by Indian Railways.</p>
		</li>
        
		<li>
        		<h2>Categories</h2>
				<ul>
					<li type="circle"><a href="Home.php">Home</a></li>
                    <li type="circle"><a href="Home.php?page=enquiry">Enquiry</a></li>
		          	<li type="circle"><a href="Home.php?page=reservation">Reservation</a></li>
	           		<li type="circle"><a href="Home.php?page=aboutus">About Us</a></li>
	           		<li type="circle"><a href="Home.php?page=contact">Contact Us</a></li>
				</ul>
				
        </li>
      </ul>
          </div>
		<!-- end #sidebar -->
       
        <div style="clear: both;">&nbsp;</div>
      </div>
   </div>
<!-- end of #page  -->


	<div id="footer">
		<p> Copyright <span style="font-size:13px">&copy; </span> 2015 .  All rights reserved.  &nbsp;Designed by:<b> Ambika Kumar        </b></p>
    </div>
      <!-- end #footer -->
</div>
</body>
</html>


