$(document).ready(function(){


	/*** index ***/	

	$(document).on("mouseover", ".gameshoverTrigger", function(){
		$(this).closest(".gameshoverAction").find(".GHAimg img").css("transform","scale(1.075)");
	});

	$(document).on("mouseleave", ".gameshoverTrigger", function(){
		$(this).closest(".gameshoverAction").find(".GHAimg img").css("transform","scale(1.00)");
	});
 
	/*** index end ***/	



	/*** create account ***/

	var csgoCounter = 0; 
	var lolCounter  = 0;
	var fortCounter = 0;

	$("#csgo_picker").click(function(){
		if (csgoCounter % 2 === 0) {
			$("#csgo_shower").fadeIn(300);
			$("#csgo_shower input").focus();
			$(this).find("div:first-child img").addClass("blur");
			$(this).find("div:last-child").fadeOut(300);
			$(this).append("<div class='checkPickerMarker'><img src='images/overall/markers.png'></div>");
		} else {
			$("#csgo_shower").fadeOut(300);
			$(this).find(".checkPickerMarker").remove();
			$(this).find("div:last-child").fadeIn(300);
			$(this).find("div:first-child img").removeClass("blur");
		}
		csgoCounter++;
	});

	$("#fortnite_picker").click(function(){
		if (fortCounter % 2 === 0) {
			$("#fortnite_shower").fadeIn(300);
			$("#fortnite_shower input").focus();
			$(this).find("div:first-child img").addClass("blur");
			$(this).find("div:last-child").fadeOut(300);
			$(this).append("<div class='checkPickerMarker'><img src='images/overall/markers.png'></div>");
		} else {
			$("#fortnite_shower").fadeOut(300);
			$(this).find(".checkPickerMarker").remove();
			$(this).find("div:last-child").fadeIn(300);
			$(this).find("div:first-child img").removeClass("blur");
		}
		fortCounter++;
	});

	$("#lol_picker").click(function(){
		if (lolCounter % 2 === 0) {
			$("#lol_shower").fadeIn(300);
			$("#lol_shower input").focus();
			$(this).find("div:first-child img").addClass("blur");
			$(this).find("div:last-child").fadeOut(300);
			$(this).append("<div class='checkPickerMarker'><img src='images/overall/markers.png'></div>");
		} else {
			$("#lol_shower").fadeOut(300);
			$(this).find(".checkPickerMarker").remove();
			$(this).find("div:last-child").fadeIn(300);
			$(this).find("div:first-child img").removeClass("blur");
		}
		lolCounter++;
	});

	/*** create account end ***/

});