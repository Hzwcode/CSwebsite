<?php
	$pos = isset($_POST['pos']) ? htmlspecialchars($_POST['pos']) : '';
	switch($pos[0]){
		case 1:
			echo "_学院工作成果|_所获奖项";
			break;
		case 2:
			echo "_";
			break;
		case 3:
			echo "_研究成果|_风采展示|_个人简介";
			break;
		case 4:
			echo "_获奖学生|_特优生|_自强学生|_创新学生";
			break;
		case 5:
			if($pos[2]==0)
				echo "科技创新团队-网易篇-百度篇-腾讯篇-阿里篇|_科技创新中心";
			else{
				echo "_成员介绍|_队伍风采|_优秀项目";
			}
			break;
		case 6:
			if($pos[2]==0){
				echo "学生会展示-部门设置-_领导团体-_优秀个人-_优秀活动|资委会展示-部门设置-_领导团体-_优秀个人-_优秀活动|党支部展示-支队设置-_领导团体-_优秀个人-_优秀活动";
			}else{
				if($pos[1]==3){
					if($pos[2]==1)
						echo "_支队介绍|_支队成员|_支队成果";
					else echo "_";
				}else{
					if($pos[2]==1)
						echo "_部门介绍|_部长副部|_部门成员|_部门成果";
					else echo "_";
				}
			}
		
	}
?>
