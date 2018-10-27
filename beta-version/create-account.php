<!DOCTYPE html>
<html>
<head>
	<?php include "./includes/head-analytics.php"; ?>

	<meta charset="utf-8">
	<title>Create account | GamingBuddy</title>
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

		<div id="login-wrapper">
			<div>
				<div><h1>Create account</h1></div>
				<div>
					<form action="" method="post">
						<div><input type="text" 	name="" placeholder="Username"/></div>
						<div><input type="email" 	name="" placeholder="Email"/>	</div>
						<div><input type="password" name="" placeholder="Password"/></div>
						<div class="CA_pick_games">
							<div><p>Pick your games</p></div>
							<div>
								<div id="csgo_picker" class="checkPicker">
									<div><img src="images/overall/csgo_small_bg.png"></div>
									<div><img src="images/overall/csgo.png"></div>
								</div>
								<div id="fortnite_picker" class="checkPicker">
									<div><img src="images/overall/fortnite_small_bg.png"></div>
									<div><img src="images/overall/fortnite.png"></div>
								</div>
								<div id="lol_picker" class="checkPicker">
									<div><img src="images/overall/lol_small_bg.png"></div>
									<div><img src="images/overall/lol.png"></div>
								</div>
							</div>
						</div>

						<div>
							<div id="csgo_shower" class="hidden"><input type="text" name="csgo" 	placeholder="Enter CSGO username"></div>
							<div id="fortnite_shower" class="hidden"><input type="text" name="fortnite" placeholder="Enter Fortnite username"></div>
							<div id="lol_shower" class="hidden"><input type="text" name="fortnite" placeholder="Enter League of Legends username"></div>
						</div>

						<div><input type="submit" value="Create account" class="submit big_btn"></div>
					</form>
				</div>
				<div class="CA_btm">
					<div><a href="sign-in">Sign in</a></div>
				</div>
			</div>
		</div>


	</div>

	<?php include "./includes/notloggedin/footer.php"; ?>

</body>
</html>