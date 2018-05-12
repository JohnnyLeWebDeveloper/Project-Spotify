<?php
include("includes/config.php");

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
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">
			<?php include("includes/navBarContainer.php");?>
		</div>


		<div id="nowPlayingBarContainer">
			<?php include("includes/nowPlayingBar.php");?>
		</div>

	</div>




</body>

</html>
