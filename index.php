<?php 
	session_save_path("./db");
	session_id('mySessionID');	
	session_start();

	$page = $_GET['page'];
	if (empty($page)) {
		$page = "home";
		
	}

	$_SESSION['page'] = $page;

	include("./contact_submit.php");
	include("./includes/header.php");
	
	/*if (isset($_POST['page'])) {
		$_SESSION['page'] = $_POST['page'];
	}*/



	//$page = mysqli_real_escape_string($page);
	if ($page == "contact") { 
		include("./includes/contact.php");
 	} else if ($page == "home") { 
		include("./includes/home.php");
 	} else if ($page == "about") { 
		include("./includes/about.php");
 	} else if ($page == "login") {
		include("./includes/login.php");
 	} else if ($page == "signup") { 
		include("./includes/signup.php");
	} 
	else if ($page == "admin") {
		  include("./includes/admin.php");
	}
	else if ($page == "test") {
		  include("./includes/test.php");
	}
	else {
		//print("hello");
			//not found
	} 

	include("./includes/footer.php");
?>