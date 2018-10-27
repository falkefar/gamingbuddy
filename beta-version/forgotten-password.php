<!DOCTYPE html>
<html>
<head>
	<?php include "./includes/head-analytics.php"; ?>
	<noscript>
		<meta http-equiv="refresh" content="0; URL=error/noscript.html">
	</noscript>

	<script type="text/javascript">
		if (navigator.cookieEnabled === false) {
			window.location = "error/enablecookies.html";
		}
	</script>
	
	<meta charset="utf-8">
	<title>Forgotten password | GamingBuddy</title>
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
				<div>
					<h1>Forgotten password</h1>
					<p>(You will recieve an email with a new password)</p>
				</div>
				<div>
					<form action="" method="post">
						<div><input type="email" name="" placeholder="Email"/>	</div>

						<div><input type="submit" value="Reset password" class="submit big_btn"></div>
					</form>
				</div>
				<div>
					<div><a href="create-account">Create account</a></div>
					<div><a href="sign-in">Sign in</a></div>
				</div>
			</div>
		</div>


	</div>

	<?php include "./includes/notloggedin/footer.php"; ?>

</body>
</html>