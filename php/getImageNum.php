<?php
	require_once('visitor_database.php');
	$pos = isset($_POST['pos']) ? htmlspecialchars($_POST['pos']) : '';
	$db=new visitor_database;
	echo $db->getNum($pos);
?>