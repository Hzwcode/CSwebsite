<?php
	require_once('visitor_database.php');
	
	$pos = isset($_POST['pos']) ? htmlspecialchars($_POST['pos']) : '';
	$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
	$length = isset($_POST['length']) ? htmlspecialchars($_POST['length']) : '';
	
	$db=new visitor_database;
	$title=$db->getTitle($pos,$id+1)."-".$db->getSize($pos,$id+1);
	for($i=2;$i<=$length;$i++){
		$title=$title.'|'.$db->getTitle($pos,$id+$i)."-".$db->getSize($pos,$id+$i);	
	}
	echo $title;
?>