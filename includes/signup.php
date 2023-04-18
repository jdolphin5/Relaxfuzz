<div class="main">
	<div class="mainText">
		<h1>Sign Up</h1>


		<!--<p>----What's included chart----<br/>&nbsp;</p>-->

			<!-- Pass password onwards to php form -->

			<form class="form-horizontal" action="signup_submit.php" role="form" method="POST">

			  <div class="form-group">
				  <input type="text" class="form-control" id="name" placeholder="Username" name="username" value="<?php echo $username; ?>">

			  </div>
			  <div class="form-group">
				  <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
			  </div>

			  <div class="form-group">
				  <input type="password" class="form-control" id="password2" placeholder="Retype Password" name="password2" value="">
			  </div>

			  <div class="form-group-button">
				<button class="button" name="submit" type="submit" id="submit">
					Submit
				</button>
			  </div>
				<div class="error">
				<p>Already have an account? Login <a href="#">here</a>
					<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>
					<?php echo $username_err; ?><br>
					<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>
					<?php echo $password_err; ?>
					<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?><br>
					<?php echo $confirm_password_err;  ?>
				</p>
				</div>
			</form>

	</div>
</div>