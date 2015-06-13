<?php
	$database=$_GET["db"];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>3D Grid Effect | Demo 1</title>
<!--		<link rel="stylesheet" type="text/css" href="css/normalize.css" />-->
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="../pagetwo/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="pagethree.css" />
        <link rel="stylesheet" type="text/css" href="side.css" />
        <link rel="stylesheet" type="text/css" href="page4.css" />
        <link rel="stylesheet" type="text/css" href="../pagetwo/pagetwo.css" />
        <script type="text/javascript" src="../pagetwo/js/jquery.js"></script>
        <script type="text/javascript" src="../pagetwo/js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
        
        <div class="loader">
            <div class="loader-inner pacman">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
        <input type='checkbox' id='sideToggle'>
        <aside>
            <h2>Other Item</h2>
            <ul>
                <li class="check"><a href="pagethree.html">科技创新团队</a></li>
                <li><a href="pagethree.html">学院近期成果</a></li>
                <li><a href="pagethree.html">科技创新中心</a></li>
                <li><a href="pagethree.html">师资队伍</a></li>
                <li><a href="pagethree.html">奖杯奖章</a></li>
                <li><a href="pagethree.html#">优秀学生</a></li>
                <li><a href="pagethree.html">学生组织</a></li>
            </ul>
        </aside>
        <div id='wrap'>
        <label id='sideMenuControl' for='sideToggle'>=</label>
        </div>
      
		<div class="container">
            <div class="close_page">
                <a href="../pagetwo/pagetwo.html"><img src="img/close.png" /></a>
            </div>
            
			<section style="clear:both;" class="grid3d horizontal" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
                        <figure><img src="img/1.jpg" alt="img01" title="沁苑7楼小卖部"/><div class="figure-title">
                            沁苑7楼小卖部</div></figure>
						<figure><img src="img/2.jpg" alt="img02" title="俱乐部团队"/><div class="figure-title">
                            俱乐部团队</div></figure>
						<figure><img src="img/3.jpg" alt="img03" title="俱乐部会议室"/><div class="figure-title">
                            俱乐部会议室</div></figure>
						<figure><img src="img/4.jpg" alt="img04" title="辅导员介绍"/><div class="figure-title">
                            辅导员介绍</div></figure>
						<figure><img src="img/5.jpg" alt="img05" title="合作院校"/><div class="figure-title">
                            合作院校</div></figure>
                        <figure><img src="img/6.jpg" alt="img06" title="主要职责"/><div class="figure-title">
                            主要职责</div></figure>
                        <figure><img src="img/7.jpg" alt="img07" title="其他图片"/><div class="figure-title">
                            其他图片</div></figure>
                        <figure><img src="img/8.jpg" alt="img08" title="其他图片"/><div class="figure-title">
                            其他图片</div></figure>
                        <figure><img src="img/9.jpg" alt="img09" title="其他图片"/><div class="figure-title">
                            其他图片</div></figure>
					</div>
				</div><!-- /grid-wrap -->
				
                <div class="content">
                    <div class="display">
                        <div class="imgs">
                            <img src="img/test1.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">沁苑7楼小卖部</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
                        <div class="trans">
                            
                        </div>
					</div>
                    <div class="display">
                        <div class="imgs">
                            <img src="img/test2.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">俱乐部团队</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
					</div>
                      <div class="display">
                        <div class="imgs">
                            <img src="img/test1.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">俱乐部会议室</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
                        <div class="trans">
                            
                        </div>
					</div>
                    <div class="display">
                        <div class="imgs">
                            <img src="img/test2.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">辅导员简介</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
					</div>
                      <div class="display">
                        <div class="imgs">
                            <img src="img/test1.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">合作院校</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
                        <div class="trans">
                            
                        </div>
					</div>
                    <div class="display">
                        <div class="imgs">
                            <img src="img/test2.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">主要职责</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
					</div>
                      <div class="display">
                        <div class="imgs">
                            <img src="img/test1.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">其他图片</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
                        <div class="trans">
                            
                        </div>
					</div>
                    <div class="display">
                        <div class="imgs">
                            <img src="img/test2.jpg" title="展示图片">
                        </div>
                        <div class="texts">
                            <h1 class="dummy-text">其他图片</h1>
                            <div class="dummy-text">
                                <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                                <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            </div>
                        </div>
					</div>
                    <div class="display">
                    <div class="imgs">
                        <img src="img/test2.jpg" title="展示图片">
                    </div>
                    <div class="texts">
                        <h1 class="dummy-text">其他图片</h1>
                        <div class="dummy-text">
                            <p>One The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                            <p> The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
                        </div>
                    </div>
                </div>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div><!-- /container -->
        <script type="text/javascript">
            $(document).ready(function(){
                setTimeout(function(){
                    $('.loader').fadeOut();
                }, 500);
            });
        </script>
		<script src="js/classie.js"></script>
		<script src="js/helper.js"></script>
		<script src="js/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>   
	</body>
</html>