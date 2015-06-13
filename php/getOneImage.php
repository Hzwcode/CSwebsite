<?php
/*
 * Created on 2015-4-2
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//fwrite(fopen("log.txt","a"),"active");
 require_once("visitor_database.php");
 $pos=$_GET['pos'];
 $i=$_GET['id']+1;
$db=new visitor_database();
$row=$db->getImg($i,$pos);
if($row==null) die();

//print_r($row);
header('content-type:'.$row['type']);
		echo $row['data'];
?>
