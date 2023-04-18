<?php
	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === "true"){
		header("location: index.php?page=home");
		exit;
	}
?>
<div class="main">
	<div class="mainText">
		<h1>Login</h1>
			<form class="form-horizontal" action="login_submit.php" role="form" method="POST">

			  <div class="form-group">
				  <input type="text" class="form-control" id="name" placeholder="Username" name="username" value="<?php echo $username; ?>">

			  </div>
			  <div class="form-group">
				  <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
			  </div>

			  <div class="form-group">
				  <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
			  </div>

			  <div class="form-group-button">
				<button class="button" name="submit" type="submit" id="submit">
					Submit
				</button>

			  </div>
				<div class="error">
				<p><a href="#">Forgot Username</a> | <a href="#">Forgot Password</a>
				</p>
				</div>
			</form>
			<?php if($_SESSION['err'] != "") { ?><p><?php echo $_SESSION['err']; $_SESSION['err'] = ""; ?></p><?php } ?>
	</div>
</div>