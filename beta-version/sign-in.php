<!DOCTYPE html>
<html>
<head>
	<?php include "./includes/head-analytics.php"; ?>

	<meta charset="utf-8">
	<title>Sign in | GamingBuddy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--meta-->
		<!--twitter-->
			<meta name="twitter:card" 		content="summary" />
			<meta name="twitter:creator" 	content="@gamingbuddy.dk" />
		<!--twitter end-->

		<!--google+-->
			<meta itemprop="og:headline" 	content="" />
			<meta itemprop="og:description" content="" />
		<!--google+ end-->

		<!--overall-->
			<meta property="og:url" 		content="https://www.gamingbuddy.eu" />
			<meta property="og:type"        content="website" />
			<meta property="og:title"       content="Find gamers in League of legends, Counter strike or fortnite with the social media for gamers" />
			<meta property="og:image"       content="" />
		<!--overall end-->

		<meta property="title"       content="" />
		<meta property="description" content="" />
  		<meta name="keywords" 		 content="">
		<meta name="author" 		 content="">
	<!--meta end-->

	<?php include "./includes/notloggedin/design.php"; ?>

</head>
<body>
	<?php include "./includes/body-analytics.php"; ?>
	<?php include "./includes/notloggedin/navbar.php"; ?>

	<div id="content-wrapper">

		<div id="login-wrapper" class="sign-in-wrapper">
			<div>
				<div><h1>Sign in</h1></div>
				<div>
					<form action="" method="post">
						<div><input type="text" name="" placeholder="Username"/>	</div>
						<div><input type="text" name="" placeholder="Password"/>	</div>

						<div><input type="submit" value="Sign in" class="submit big_btn"></div>
					</form>
				</div>
				<div>
					<div><a href="forgotten-password">Forgotten password?</a></div>
					<div><a href="create-account">Create account</a></div>
				</div>
			</div>
		</div>


	</div>

	<?php include "./includes/notloggedin/footer.php"; ?>

</body>
</html>