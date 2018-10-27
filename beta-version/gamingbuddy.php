<?php 

include "core/init.php"; 

if (@session($_SESSION["buddy"])) {
	include "includes/loggedin/index-content.php";
} else {
	include "includes/notloggedin/index-content.php"; 
} 

?>
