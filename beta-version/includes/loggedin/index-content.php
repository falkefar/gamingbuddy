		
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1250px)" href="design/loggedin/overall/css/desktop.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1250px)" href="design/loggedin/customer/css/desktop.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1250px)" href="design/overall/css/desktop.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 960px) and (max-width: 1250px)" href="design/loggedin/overall/css/medium.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 960px) and (max-width: 1250px)" href="design/loggedin/customer/css/medium.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 960px) and (max-width: 1250px)" href="design/overall/css/medium.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="design/overall/css/mobile.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="design/loggedin/customer/css/mobile.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="design/loggedin/overall/css/mobile.css"> 
 
</head>
<body>

<?php checkLogin(1,basename(__FILE__)); 
include "includes/customer/navbar.php"; 

$collectIt2 = $db->prepare("
	SELECT * FROM booking_and_invoice 
	INNER JOIN booking_request ON booking_and_invoice.id = booking_request.invoice_id 
	WHERE booking_request.status = ? AND booking_request.user_id = ? 
	");

	$collectIt2->bind_param("ss", $sts, $user_id);
	$collectIt2->execute();
	$GetcollectIt2 = $collectIt2->get_result();
	$collectIt2->store_result();

$user_id =$_SESSION["customer"];

$collectIta = $db->prepare("SELECT * FROM booking_and_invoice WHERE user_id = ?");
	$collectIta->bind_param("s", $user_id);
	$collectIta->execute();
	$GetcollectIta = $collectIta->get_result();
	$collectIta->store_result();


$collectItamsg = $db->prepare("SELECT * FROM all_messages WHERE user_id = ? LIMIT 1");
	$collectItamsg->bind_param("s", $user_id);
	$collectItamsg->execute();
	$GetcollectItamsg = $collectItamsg->get_result();
	$collectItamsg->store_result();

if($_GET) {
	if (isset($_GET["t"])) {
		if ($_GET["t"] == "1") {
			?>
			<div class="action">
				<p>Tilbuddet blev succesfuldt afvist.</p>
				<div class="close-action">x</div>
			</div>
			<?php 
		}
	} else if (isset($_GET["a"])) {
		if ($_GET["a"] == "1") {
			?>
			<div class="action">
				<p>Du kan maks booke 1 vendor af gangen.</p>
				<div class="close-action">x</div>
			</div>
			<?php 
		}
	} else if (isset($_GET["m"])) {
		if ($_GET["m"] == "1") {
			?>
			<div class="action">
				<p>Du har successfuldt sendt jobanmodningen til vendoren. Tjek dine vendor tilbud for at komme videre.</p>
				<div class="close-action">x</div>
			</div>
			<?php 
		}
	}	
}

?>

<div id="wrapper">

		<div class="h400 relative lh300 fcenter w100 fbg">
			<div class="top125 center front fffcolor">
				<h1>Velkommen, <span class="capitalized"><?php echo name(userData("full_name")) ?></span>. Her finder du de bedste vendors</h1>
			</div>
			<div class="aimg">
				<img class="filter" alt="baggrundsbillede af bartender | gobartender.dk"  src="images/static/notloggedin/welcome.png">
			</div>

			<form action="sog-vendors" method="post">
				<div id="main-search">
					<div>
						<div id="ss"><input type="text" name="where" maxlength="8" autocomplete="off" placeholder="Søg efter postnummer..." required></div>
						
						<div>
							<select name="amount" id="ggest"> 
							<option selected disabled hidden style="display:none;">Gæster</option>
								<option value="1">1 Gæst</option>
								<option value="3">3 Gæster</option>
								<option value="5">5 Gæster</option>
								<option value="10">10 Gæster</option>
								<option value="20">20 Gæster</option>
								<option value="40">40 Gæster</option>
								<option value="60">60 Gæster</option>
								<option value="80">80 Gæster</option>
								<option value="100">100 Gæster</option>
								<option value="150">150 Gæster</option>
								<option value="200">200 Gæster</option>
								<option value="250">+200 gæster</option> 
							</select>
						</div>
						<div><input type="submit" value="Søg"></div>
					</div>
				</div>
			</form>
		</div>

	<div class="inner-wrapper">

		<?php if (0) { ?>
		<!--display ved kommende event-->
		<div class="letter-spacing eee w100 font16 br5 confirm pw25">
			<p>Husk kommende aftale med vendor den dato. Nyd dit event!</p>
		</div>
		<?php } ?>
 
		<div class="h100 lh75">
			<h1>Mit overblik</h1>
		</div>
  
		<div class="w100 h250 greycolor relative eee center fcenter">
			<div class="top45 relative">
				<div class="mobilew100 left w33">
					<a href="opslag-til-vendors">
						<div class="font80"><h1> 
							<?php echo $GetcollectIta->num_rows; ?>
						</h1></div>
						<div><h3 class="font16">Aktive opslag</h3></div>
					</a>
				</div>
				<div class="mobilew100 left w33">
					<a href="vendor-tilbud">
						<div class="font80"><h1><?php echo $GetcollectIt2->num_rows; ?></h1></div>
						<div><h3 class="font16">Vendor tilbud</h3></div>
					</a>
				</div>
				
				<div class="mobilew100 left w33">
					<a href="mine-beskeder">
						<div><span class="font80"><?php echo $GetcollectItamsg->num_rows; ?></span></div>
						<div><h3 class="font16">Kommende events</h3></div>
					</a>
				</div>
				
			</div>
		</div>
		
	</div>
	<?php include "includes/customer/footer.php"; ?>
</div>

