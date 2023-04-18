<div class="main">
<div class="mainText">
	<h1>Contact Us</h1>

		<form class="form-horizontal" action="contact_submit.php" role="form" method="POST">

		  <div class="form-group">
			  <input type="text" class="form-control" id="name" placeholder="Username" name="username" value="<?php echo $username; ?>">

		  </div>
		  <div class="form-group">
			  <input type="email" class="form-control" id="email" placeholder="Email (required)" name="email" value="<?php echo $email; ?>">
		  </div>
		  <textarea class="form-textbox" rows="10" placeholder="Message" name="message"><?php echo $message; ?></textarea>

		  <div class="form-group-button">
			<button class="button" name="submit" type="submit" id="submit">
				Submit
			</button>

		  </div>

			<div class="error">
			<p><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry-->
				<?= $username_error; ?>
				<?= $email_error; ?>
				<?= $message_error; ?>	
				<?= $success;?>
			</p></div>

		</form>

</div>
</div>