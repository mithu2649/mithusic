<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="favicon.png" rel="icon" type="image/png">


			<!-- For Google -->
			<meta name="description" content="<?php echo $description;?>" />
			<meta name="keywords" content="Mithusic, Mithu, Mondal, Mithu Mondal, Songs by Mithu, Videos by Mithu, Mithu's archive, About mithu, music, mithuation, songs, videos" />

			<meta name="author" content="Mithu" />
			<meta name="copyright" content="Mithusic 2018" />
			<meta name="application-name" content="Mithusic" />

			<!-- For Facebook -->
			<meta property="og:title" content="Welcome to Mithusic" />
			<meta property="og:type" content="music.album" />
			<meta property="og:image" content="https://www.mithusic.ml/fb_cover.png" />
			<meta property="og:url" content="https://www.mithusic.ml/" />
			<meta property="og:description" content="<?php echo $description;?>" />
			
			<meta name="theme-color" content="#000000" /><!-- chrome tab background-color -->

			
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/side_nav.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:100" rel="stylesheet">
</head>
<body>
    <div id="menu">
		<span id="menu-toggle" onclick="openNav()">&equiv;</span>
		<a style="text-decoration:none;" href="index.php"><span class="logo_text">Mithu<span style="color:gray">sic</span></span></a>
		<a href="<?php if(basename($_SERVER['PHP_SELF'])=='videos.php'){echo 'index.php';}else{echo 'videos.php';} ?>" class="btn-videos"><?php if(basename($_SERVER['PHP_SELF'])=='videos.php'){echo 'Songs';}else{echo 'Videos';} ?></a>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="about.php">About</a>
				<a href="index.php">Songs</a>
				<a href="videos.php">Videos</a>
				<a href="photos.php">Photos</a>
				<a href="contact.php">Contact</a>
				<a href="#">Report a problem</a>
			</div>
    </div>
    <div id="alert-div"><span id="closeNotif" onclick="this.parentElement.style.display='none';">&times;</span><span id="alert-div-text">Song requested succesfully!</span></div>

	<div id="main"><!-- Main Content opened -->
