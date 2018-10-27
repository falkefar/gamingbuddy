<?php 

	$sts = 2;
	$user_id=$_SESSION["customer"];

$collectIt = $db->prepare("
	SELECT * FROM booking_and_invoice 
	INNER JOIN booking_request ON booking_and_invoice.id = booking_request.invoice_id 
	WHERE booking_request.status = ? AND booking_request.user_id = ? LIMIT 1
	");

	$collectIt->bind_param("ss", $sts, $user_id);
	$collectIt->execute();
	$GetcollectIt = $collectIt->get_result();
	$collectIt->store_result();


	while ($rowd = $GetcollectIt->fetch_assoc()) { 
		$chc[] = $rowd;
	}


?>

<div class="fffbg" id="top-navbar">
	<div class="left"><h1><a href="index">Template</a></h1></div>
	<div class="left"> 
		<div id="specificnavbaruser" class="mobilenodisplay left">		
			<form action="sog-vendors" method="post"> 
					<div>
						<div class="w55 left"><input type="text" name="where" maxlength="8" autocomplete="off" placeholder="Søg efter postnummer..." required></div>
						
						<div class="left">
							<select name="amount"> 
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
						<div class="right rborder1"><input class="fffbg" type="image" src="images/static/loggedin/search-icon.png"></div>
					</div> 
			</form>
		</div>
		&nbsp;
	</div>



	<div class=" left tright w33">

		<div class="mobilerightn right">
			<div id="activator" class="pointer right top2"> 
				<div id="spss">&#9495;</div>
				<div class="relative br100 speicifi top5"> 

					<?php if (empty(userData("pb_img_id"))){ ?>
						<div class="relative"><img src="images/static/overall/test-profile-image.png"></div>
					<?php } else { ?>
						<div class="relative"><img src="<?php echo "user-data/customer/" . defineDirName($_SESSION["customer"]) . "/images/profileimage.jpg"; ?>"></div>
					<?php } ?> 

				</div>
			</div> 
		</div>

		<div class="right">
			<div class="desktopdisplaynone mediumdisplaynone" id="mobilenav"></div>
		</div> 

	</div>
</div>

<div class="fffbg" id="side-navbar">
	<div class="br5 h50 lh50 w100 pl20 eee">
		<a href="index">
			<div class="left"><img src="images/static/loggedin/navbar-icon.png"></div>
			<div class="left pr20 font16"><p>Velkommen</p></div>
		</a>
	</div>

	<div class="pw25"> 
		<ul>
			<li><a href="opslag-til-vendors">Mine opslag</a></li>
			<li><a href="mine-vendors">Mine vendors</a></li> 
			<?php 
			if ($GetcollectIt->num_rows==1) { 
				foreach ($chc as $rowd) {
				?>
					<li><a href="mine-beskeder?identification=<?php echo $rowd["vendor_id"]; ?>">Beskeder</a></li> 
					<?php
				 }
			} else { ?> 
				<li><a href="mine-beskeder">Beskeder</a></li>
			<?php } ?>

			<?php if ($GetcollectIt->num_rows==1) { 
				foreach ($chc as $rowda) {
				?>
					<li><a href="tilbud?identification=<?php echo $rowda["vendor_id"]; ?>">Vendor tilbud</a></li> 
					<?php
				 }
			} else { ?> 
			<li><a href="tilbud">Vendor tilbud</a></li>
			<?php } ?> 

			<li><a href="customer-profile">Min profil</a></li>
			<?php if (!empty($_GET["id"])) { ?> 
				<li><a href="mine-indstillinger?id=1">Indstillinger</a></li>
			<?php } else { ?>
				<li><a href="mine-indstillinger">Indstillinger</a></li>
			<?php }?> 
			<li class="top10"><a href="log-ud">Log ud</a></li>  
			<li id="dropdown" class="desktopdisplaynone mediumdisplaynone"></li>
		</ul>  
	</div>

	<div class="bottomed">
		<span class="font12">Logget ind som <span class="capitalized"><?php echo substr(userData("full_name"),0,35); ?></span></span>
	</div>


</div>



<div id="shower">
	<div class="font16 pl20 h75 fffbg lh75 bbottom1">
		<div class="left w80"><b>Supplerende menubar</b></div>
		<div id="close-shower" class="pointer right w20 center bleft1">X</div>
	</div>

	<a target="_blank" href="handelsbetingelser">
		<div class="font14 pw25 fffbg bbottom1">
			Handelssikkerhed og garanti
		</div>
	</a>

	<a href="">
		<div class="font14 pw25 fffbg bbottom1">
			Anmeld vendor
		</div>
	</a>

	<div id="APA" class="pointer relative font14 pw25 fffbg bbottom1">
		<div class="left">Priser / afgifter</div>
		<div class="right sppa">&#9495;</div>
	</div>
	<div class="eee font14 bbottom1 pw25" id="PA">
		<div class="pw12">
		<ul>
			<li><br>Det gratis at benytte platformen</li>
			<li><br>Ved betaling tilføjer firmaet 5% i gebyr af beløbbet</li>
			<li><br>Læs <a href="handelsbetingelser" target="_blank" class="underline">Handelsbetingelser og vilkår</a> for mere</li>
		</ul>
		</div>
	</div>

	<a href="hjaelp" target="_blank">
		<div class="font14 pw25 fffbg bbottom1">
			Support / Hjælp
		</div>
	</a>

	<div class="top50 font14 pw25 fffbg center">
		Logo 2017 &copy;
	</div>

</div>