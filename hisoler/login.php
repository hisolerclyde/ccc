
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
  .cont{
	  padding-right: 700px;
  }
  </style> 
</head>
<body>
<div class="cont">
  <div class="header">
  	<h2>Login</h2>
	  <br><i class='fas fa-user-circle' style='font-size:50px;'></i><br>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username :</label>
  		<input type="text" placeholder="Username" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password :</label>
  		<input type="password" placeholder="Password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
</body>
</html>