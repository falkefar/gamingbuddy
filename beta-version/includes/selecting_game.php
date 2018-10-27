<?php 

if (!empty($_POST["gameValue"])) {

	$GV = htmlentities($_POST["gameValue"]);
	$CAT = htmlentities($_POST["cat"]);

	if (!empty($CAT) && $CAT != "undefined" && $GV != "game_backer") {
		exit("redirect");
	}

	/********************** STANDARD VIEW ******************/



	if ($GV == "game_backer") {

	?>

		<div class="select-game-three hidden">

			<div class="gameshoverAction">
				<div class="GHAimg"><img src="images/overall/csgo-bg.png" alt="Counter strike background"></div>
				<div>
					<div><img src="images/overall/csgo.png" alt="Counter strike"></div>
					<div class="gameshoverTrigger">
						<div id="csgo_competitive">	<button>Competitive</button></div>
						<div id="csgo_casual">		<button>Casual</button>		</div>
						<div id="csgo_coaching">	<button>Coaching</button>	</div>
					</div>
				</div>
			</div>

			<div class="gameshoverAction">
				<div class="GHAimg"><img src="images/overall/fortnite-bg.png" alt="Fortnite background"></div>
				<div>
					<div><img src="images/overall/fortnite.png" alt="Fortnite"></div>
					<div class="gameshoverTrigger">
						<div id="fortnite_competitive">	<button>Competitive</button></div>
						<div id="fortnite_casual">		<button>Casual</button>		</div>
						<div id="fortnite_coaching">	<button>Coaching</button>	</div>
					</div>
				</div>
			</div>

			<div class="gameshoverAction">
				<div class="GHAimg"><img src="images/overall/lol-bg.png" alt="League of legends background"></div>
				<div>
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div class="gameshoverTrigger">
						<div id="lol_competitive">	<button>Competitive</button></div>
						<div id="lol_casual">		<button>Casual</button>		</div>
						<div id="lol_coaching">		<button>Coaching</button>	</div>
					</div>
				</div>
			</div>
		
		</div>


	<?php 
	
	}



	/********************** STANDARD VIEW END ******************/












	/************************** CSGO **************************/




	if ($GV == "csgo_competitive") { 
	?>

		<div class="sub-game-top sub-select-game-one hidden" id="csgo">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="competitive">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>Team builder</h1></div>
					</div>
				</div>
			</div>

		</div>
		
	<?php 
	} else if ($GV == "csgo_casual") { 
	?>

		<div class="sub-game-top sub-select-game-one hidden" id="csgo">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="casual">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>Casual</h1></div>
					</div>
				</div>
			</div>

		</div>
		
	<?php 
	} else if ($GV == "csgo_coaching") { 
	?>
		
		<div class="sub-game-top sub-select-game-four hidden" id="csgo">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="meta-change">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>Meta Change</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="macro-gp">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>Macro GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="micro-gp">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>Micro GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="all">
				<div class="GHAimg"><img src="images/overall/csgo-big-bg.png" alt="CSGO background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/csgo.png" alt="CSGO image"></div>
					<div>
						<div><h1>All</h1></div>
					</div>
				</div>
			</div>

		</div>
		
	<?php 
	}




	/************************ CSGO END ************************/
















	/************************** FORNITE **************************/





	if ($GV == "fortnite_competitive") { 

		// two
	?>

		<div class="sub-game-top sub-select-game-two hidden" id="fortnite">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="duo-partner">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>Duo partner</h1></div>
					</div>
				</div>
			</div>

			<div class="gameshoverAction" id="team-builder">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>Team builder</h1></div>
					</div>
				</div>
			</div>

		</div>
		
		
	<?php 
	} else if ($GV == "fortnite_casual") { 
	?>

		<div class="sub-game-top sub-select-game-one hidden" id="fortnite">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="casual">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>Casual</h1></div>
					</div>
				</div>
			</div>

		</div>
		
		
	<?php 
	} else if ($GV == "fortnite_coaching") { 

		// three
	?>

		<div class="sub-game-top sub-select-game-three hidden" id="fortnite">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="strategic-gp">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>Strategic GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="micro-gp">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>Micro GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="all">
				<div class="GHAimg"><img src="images/overall/fortnite-big-bg.png" alt="Fortnite background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/fortnite.png" alt="Fortnite image"></div>
					<div>
						<div><h1>All</h1></div>
					</div>
				</div>
			</div>

		</div>
		
		
		
	<?php 
	}




	/************************ FORTNITE END ************************/
















	/********************* LEAGUE OF LEGENDS *********************/

	if ($GV == "lol_competitive") {  
	?>

		<div class="sub-game-top sub-select-game-one hidden" id="league-of-legends">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="competitive">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>Competitive</h1></div>
					</div>
				</div>
			</div>

		</div>
		
		
	<?php 
	} else if ($GV == "lol_casual") {  
	?>

		<div class="sub-game-top sub-select-game-one hidden" id="league-of-legends">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="casual">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>Casual</h1></div>
					</div>
				</div>
			</div>

		</div>
		
		
	<?php 
	} else if ($GV == "lol_coaching") {  
	?>

			
		<div class="sub-game-top sub-select-game-four hidden" id="league-of-legends">

			<div id="game_backer">
				<button>« Back</button>
			</div>

			<div class="gameshoverAction" id="meta-change">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>Meta Change</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="macro-gp">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>Macro GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="micro-gp">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>Micro GP</h1></div>
					</div>
				</div>
			</div>


			<div class="gameshoverAction" id="all">
				<div class="GHAimg"><img src="images/overall/lol-big-bg.png" alt="LOL background"></div>
				<div class="gameshoverTrigger">
					<div><img src="images/overall/lol.png" alt="League of legends"></div>
					<div>
						<div><h1>All</h1></div>
					</div>
				</div>
			</div>

		</div>
		
	<?php 
	}


	/******************* LEAGUE OF LEGENDS END *******************/
	












}
return false;



?>