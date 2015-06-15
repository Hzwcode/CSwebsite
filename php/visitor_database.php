<?php
class visitor_database{
	var $con;
	var $module=array(
		"recentAchievement",		//学院近期成果
		"prize",					//奖杯奖章
		"teachers",					//师资队伍
		"outStandings",				//优秀学生
		"branch",					//科技创新中心
		"student",					//学生组织
	);
	function __construct(){
		$this->connect();
 	}
	function connect(){
			$this->con=mysqli_connect("localhost","visitor","alizhhm","imgdata");
			if (!$this->con)
			 {
				 die('Could not connect: ' . mysqli_error($this->con));
			 }
	}
	function getImg($id,$pos){
		$dbname=$this->module[$pos[0]-1];
		$sql="select * from ".$dbname." where PRI=".$id." AND module=".$pos;
		$result=mysqli_query($this->con,$sql);
		if($result->num_rows==0) 
			return null;
		$row=mysqli_fetch_assoc($result);
		return $row;
 	}
	function getNum($pos){
		$dbname=$this->module[$pos[0]-1];
		$sql="select max(PRI) from ".$dbname." where module=".$pos;
		$result=mysqli_query($this->con,$sql);
		if($result->num_rows==0) return null;
		$row=mysqli_fetch_assoc($result);
		return $row['max(PRI)'];
	}
	function getTitle($pos,$id){
		$dbname=$this->module[$pos[0]-1];
		$sql="select title from ".$dbname." where PRI=".$id." AND module=".$pos;
		$result=mysqli_query($this->con,$sql);
		if($result->num_rows==0) 
			return null;
		$row=mysqli_fetch_assoc($result);
		return $row['title'];
	}
	function getIntroduction($pos,$id){
		$dbname=$this->module[$pos[0]-1];
		$sql="select introduction,title from ".$dbname." where PRI=".$id." AND module=".$pos;
		$result=mysqli_query($this->con,$sql);
		if($result->num_rows==0) 
			return null;
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	function getSize($pos,$id){
		$dbname=$this->module[$pos[0]-1];
		$size=null;
		if($id>=1&&$id<=$this->getNum($pos)){
			$sql="select size from ".$dbname." where PRI=".$id." AND module=".$pos;
			$result=mysqli_query($this->con,$sql);
			if($result->num_rows==0) 
				return "_";
			$row=mysqli_fetch_assoc($result);
			$size=$row['size'];
		}else $size="_";
		return $size;
	}
}
?>