<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	
	<form method="post" action="register.php">

		<?php include('error.php'); ?>
		
		<div class="input-group">
			<input type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="lastname" placeholder="Lastname" value="<?php echo $lastname; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>