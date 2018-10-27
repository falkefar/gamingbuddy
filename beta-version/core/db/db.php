<?php

$db = new mysqli("localhost", "root", "", "gamingbuddy");

if ($db->connect_errno) {
	die("GamingBuddy is temporarily shut down...");
}

?>