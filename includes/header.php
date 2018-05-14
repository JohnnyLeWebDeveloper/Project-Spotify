<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Spotify!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/script.js" type="text/javascript"></script>

</head>

<body>

	<script type="text/javascript">
		var audioElement = new Audio();
		audioElement.setTrack("assets/music/selected04.mp3");
		audioElement.audio.play();
	</script>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">
