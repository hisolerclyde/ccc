<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
	  <br><i class='fas fa-user-circle' style='font-size:100px;'></i><br>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username :</label>
  	  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email :</label>
  	  <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password :</label>
  	  <input type="password" placeholder="Password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password :</label>
  	  <input type="password" placeholder="Confirm Password" name="password_2">
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