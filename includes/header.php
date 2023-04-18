<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>RelaxFuzz</title>
	<meta name="description" content="360 Virtual Reality Nature Website Nature, immersion, immersive, 360, VR, AR, virtual reality, augmented reality, relaxation, relax, outdoors, experience, beauty, view, calm, soothing, stress, relief, anxiety">
	<meta name="keywords" content="Nature, immersion, immersive, 360, VR, AR, virtual reality, augmented reality, relaxation, relax, outdoors, experience, beauty, view, calm, soothing, stress, relief, anxiety">

    <!--[if IE]>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

    <link href="IEStyleSheet.css" rel="stylesheet" />
    <![endif]-->

    <!--[if !IE]> -->
		
        <link href="stylesheet.css?v=<?php echo date("h:i:sa"); ?>" rel="stylesheet" type="text/css" media="only screen" />
        <!-- <link href="MobileStyleSheet.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px) , only screen and (-webkit-min-device-pixel-ratio: 2) , screen and (-webkit-device-pixel-ratio:1.5)" /> -->
        <!-- <![endif]-->

    <!--[if IEMobile]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

        <link href="MobileStyleSheet.css" rel="stylesheet" />
    <![endif]-->

</head>
<body>
	<div class="bigArea">
        <div class="Container">
            <header>
                <!--<span>Adjustable WebSite Example using HTML5 CSS3 </span> -->
            </header>
			
            <div class="nav">
				<img src="./img/nav-left.jpg"></img>
				<ul>
					<li><a class="<?php if($_SESSION['page'] == "home") { echo ("navActive"); } ?>" href="index.php?page=home">Home</a></li>
					<li><a class="<?php if($_SESSION['page'] == "about") { echo ("navActive"); } ?>" href="index.php?page=about">About</a></li>
					<li><a class="<?php if($_SESSION['page'] == "contact") { echo ("navActive"); } ?>" href="index.php?page=contact">Contact</a></li>
					<li><a class="" href="#"></a></li><!--<li><a href="#">Login</a></li>-->
				</ul>
				<img src="./img/nav-right.jpg"></img></div>
			
            <div class="content">