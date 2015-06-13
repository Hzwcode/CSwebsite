<?php
require_once('visitor_database.php');

$db=new visitor_database;
$pos = isset($_POST['pos']) ? htmlspecialchars($_POST['pos']) : '';

$num=$db->getNum($pos);
echo $num;
?>