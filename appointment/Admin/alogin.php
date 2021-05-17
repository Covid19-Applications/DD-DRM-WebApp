<!DOCTYPE html>
<html>
    <head>
        <style>
            .background-image{
                width=50px;
            }
        </style>
    </head>
<body style="background-image:url(p.png)">
<link rel="stylesheet" href="main.css">
	<form action="alogin.php" method="post">
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong> ADMIN LOGIN</strong></li>
					
				</ul>
	</div>
	<div class="sucontainer">
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="pass" required><br><br>
		
		<div class="container" style="background-color:grey">
			<button type="submit" name="submit" style="float:right">Log In</button>
		</div>
<?php 
function SignIn() 
{ 
session_start();
 {  
	if($_POST['uname']=='admin' && $_POST['pass']=='admin') 
	{ 
		$_SESSION['userName'] = 'admin'; 
		echo "Logging you in..";
	//	header( "Refresh:3; url=mainpage.php)
		        echo "<script type='text/javascript'>document.location='mainpage.php';</script>";

		
	} 
	else { 
		echo "Wrong Credentials!"; 
		} 
	}
	} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>
</body>
</html>