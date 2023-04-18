<?php
	// Check if the user is already logged in, and if the user is a super user
	if(!($_SESSION['loggedin'] == "true" && $_SESSION['type'] == "super")) {
		header("location: index.php?page=home");
		exit;
	}
	else {
?>
<div class="main">
	<div class="mainText">
		<h1>Add New Video</h1>
		<p>

		<form class="form-horizontal" action="add.php" role="form" method="POST">

		  <div class="form-group">
			  <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="">
		  </div>
		  
		  <div class="form-group">
			  <input type="text" class="form-ctrlMini" id="duration1" placeholder="Duration(m)" name="duration1" size="5" value=""> : 
			  <input type="text" class="form-ctrlMini" id="duration2" placeholder="Duration(s)" name="duration2" size="5" value="">
		  </div>
		  
		  <div class="form-group">
			  <input type="text" class="form-control" id="tags" placeholder="Tags" name="tags" value="">
		  </div>
		  
		  <div class="form-group">
			  <input type="text" class="form-control" id="link" placeholder="Link" name="link" value="">
		  </div>
		
		  <div class="form-group">
			  <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating" value="">
		  </div>
		
		  <div class="form-group">
			  <input type="text" class="form-control" id="author" placeholder="Author" name="author" value="">
		  </div>
		
		  <div class="form-group-button">
			<button class="button" name="submit" type="submit" id="submit">
				Add Video
			</button>
		  </div>
		
		</form>
		
		</p>	
	</div>
</div>

<div class="mainGap"></div>
<div class="main">
	<div class="mainText">
		<h1>Modify/Delete Existing Video</h1>
		<p>
			Title 1 | <a href="#">Delete</a> | <a href="#">Modify</a><br />
			Title 2 | <a href="#">Delete</a> | <a href="#">Modify</a><br />
			Title 3 | <a href="#">Delete</a> | <a href="#">Modify</a><br /><br />
		</p>
	</div>
</div>
<?php	
	}
?>