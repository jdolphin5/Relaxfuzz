<?php
// Initialize the session
session_save_path("./db");
session_id('mySessionID');	
session_start();
 
// Include config file
require_once "./db/config.php";

// Define variables and initialize with empty values
$title = $duration = $tags = $URLlink = $rating = $author = "";
$title_err = $duration_err = $tags_err = $link_err = $rating_err = $author_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check title field
    if (empty(trim($_POST["title"]))) {
        $title_err = "Please enter title.";
		$_SESSION['err'] = $title_err;
    } else {
        $title = trim($_POST["title"]);
    }
	
	//duration
    if (empty(trim($_POST["duration1"])) && empty(trim($_POST["duration2"]))) {
        $duration_err = "Please enter duration (min:sec)";
		$_SESSION['err'] = $duration_err;
    } else {
        $duration = trim($_POST["duration1"]) . trim($_POST["duration2"]);
    }
	
	//tags
	if (empty(trim($_POST["tags"]))){
        $tags_err = "Please enter tags";
		$_SESSION['err'] = $tags_err;
    } else {
        $tags = trim($_POST["tags"]);
    }
	
	//rating
	if (empty(trim($_POST["rating"]))){
        $rating_err = "Please enter rating";
		$_SESSION['err'] = $rating_err;
    } else {
        $rating = trim($_POST["rating"]);
    }
	
	//author
	if (empty(trim($_POST["author"]))){
        $author_err = "Please enter author";
		$_SESSION['err'] = $author_err;
    } else {
        $author = trim($_POST["author"]);
    }
	
	//link
	if (empty(trim($_POST["link"]))){
        $link_err = "Please enter link";
    }
    
    // Validate credentials and check for duplicate link
    if (empty($title_err) && empty($duration_err) && empty($tags_err) && empty($link_err) && empty($rating_err) && empty($author_err))
	   {
			//This section checks that the link is not already in the db
			//Prepare a select statement
			$sql = "SELECT id FROM videos WHERE link = ?";

			if($stmt = mysqli_prepare($link, $sql)) {
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $param_link);

				// Set parameters
				$param_link = $URLlink;

				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)){
					/* store result */
					mysqli_stmt_store_result($stmt);

					if(mysqli_stmt_num_rows($stmt) == 1) {
						$link_err = "This link is already taken.";
						$_SESSION['err'] = $link_err;
					} else {
						$URLlink = trim($_POST["link"]); //good to go
					}

				} else {
					echo "Oops! Something went wrong. Please try again later.";
				}
			}

			// Close statement
			mysqli_stmt_close($stmt);
		
			// Prepare an insert statement
			$sql = "INSERT INTO videos (title, duration, tags, link, rating, author) VALUES (?, ?, ?, ?, ?, ?)";

			if($stmt = mysqli_prepare($link, $sql)) {
				//Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "ssssss", $param_title, $param_duration, $param_tags, $param_link, $param_rating, $param_author);

				//Set parameters
				//Note that the index (id) is auto incremented
				$param_title = $title;
				$param_duration = $duration;
				$param_tags = $tags;
				$param_link = $URLlink;
				$param_rating = $rating;
				$param_author = $author;

				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)) {
					// Redirect to admin page
					header("location: index.php?page=admin");
					$_SESSION['err'] = "Success!";
				} else {
					echo "Something went wrong. Please try again later.";
				}
			}
			// Close statement
			mysqli_stmt_close($stmt);
		} 
		// Close connection
		mysqli_close($link);
	}
	header("location: index.php?page=admin");
?>