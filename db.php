<?php

header("Access-Control-Allow-Origin: *");
// Probably shouldn't be doing this ^^^ but okay

session_start();

$db_server;
$db_username;
$db_password;
$db_name;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/sql-auth.json')) {
	$credFile = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/sql-auth.json');
	$creds = json_decode($credFile, true);

	$db_server = $creds["server"];
	$db_username = $creds["user"];
	$db_password = $creds["pass"];
	$db_name = $creds["name"];
}

function getDB() {
	global $db_username, $db_password, $db_server, $db_name;

	if (isset($mysqli) && $mysqli instanceof mysqli) {
		if (!($mysqli->errno) && ($mysqli->ping()))
			return $mysqli;
	}

	return ($mysqli = new mysqli($db_server, $db_username, $db_password, $db_name));
}

?>
