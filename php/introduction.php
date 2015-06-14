<?php
	require_once('visitor_database.php');
	
	$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
	$pos= isset($_POST['pos']) ? htmlspecialchars($_POST['pos']) : '';
	
	$db=new visitor_database;
	$row=$db->getIntroduction($pos,$id);
	$intro=$row['introduction'];
	$intro=($intro==null?'':$intro);
	$title=$row['title'];
	$size=$db->getSize($pos,$id-1)."|".$db->getSize($pos,$id+1);
	echo $intro."|";
	echo $title."|";
	echo $size;
?>