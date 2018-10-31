<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	
	// require_once '../lib/DB.php';
	// $db = new DB();

	// $sql = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	// $db->query($sql);
	// $objResult = $db->fetch_array();
?>