<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendance Checker</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="menu.css">
</head>
<body>
	<div id='cssmenu'>
	<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Class</span></a>
      <ul>
	  
         <li class='has-sub'><a href='createclass.php'><span>Create Class</span></a>
         </li>
		 <?php
		// connect to database
		$db = mysqli_connect('localhost', 'root', '', 'create-class');	

		$sql = "SELECT * FROM `class`";
		$result = $db->query($sql);
		while ($data = $result->fetch_assoc())
		{
		?>
         <li class='has-sub'><a href='#'><span><?php echo $data['classcode']; ?></span></a>
		 </li>
           
		<!-- <li class='has-sub'><a href='#'><span>Class 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
        </li>
		<li class='has-sub'><a href='#'><span>Class 3</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
		<li class='has-sub'><a href='#'><span>Class 4</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
        </li>
		
		-->
		  <?php
		}
		?>
      </ul>
	</li>
	<li><a href='#'><span>About</span></a></li>
	<li class='last'><a href='#'><span>Settings</span></a></li>
	<li><a href="index.php?logout='1'" style="color: yellow;">Logout</a></li>
	</ul>
	</div>
	
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>
	
	
	
</body>
</html>