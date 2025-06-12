<?php

//關閉系統提示

error_reporting(0);
session_start();

// 檢査是否有登入（Session 有被設定）
//如果沒有，轉址到登入頁面

if(isset($_SESSION["account"])==FALSE) {
 header('Location: home.html');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>電音Blog</title>
	<link rel = "stylesheet" type = "text/css" href = "home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body background="bg.jpg" style="background-repeat: no-repeat; background-size: cover;">

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li style="list-style: none;float: left;margin-left: 30px;">
					<a href="https://www.facebook.com/edm/" >
						<img src="facebook.png" width="25" height="25" alt=""/>
					</a>
				</li>

				<li style="list-style: none;float: left;margin-left: 30px;">
					<a href="https://www.youtube.com/user/chriswc691/" >
						<img src="youtube.png" width="25" height="25" alt=""/> 
					</a>
				</li>

				<li style="list-style: none;float: left;margin-left: 30px;">
					<a href="https://twitter.com/" >
						<img src="twitter.png" width="25" height="25" alt=""/>
					</a>
				</li>

				<li style="list-style: none;float: left;margin-left: 30px;">
					<a href="https://www.instagram.com/electric._.forest/" >
						<img src="instagram.png" width="25" height="25" alt=""/>
					</a>
				</li>


			</ul>
			<form class="form-inline my-2 my-lg-0">
				<li class="nav-item" style="list-style: none;float: left;margin-left: 30px;">
					<a class="nav-link" href="contact.html">Contact me</a>
				</li>
				<li class="nav-item" style="list-style: none;float: left;margin-left: 30px;">
					<a class="nav-link" href="about.html">About</a>
				</li>
			</form>
		</div>
	</nav>
	<div class="logo">
		<a href="loginHome.php" >   
			<img src="logo1.jpg"  width="20%" style="display:block; margin:auto;"/>      
		</a> 
	</div>

	<!-- bar2 -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2e3032;">

		<div class="collapse navbar-collapse container" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto container">
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="loginHome.php">首頁</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="whatis.html">何謂電音?</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="category.html">電音的種類</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="identify.html">如何分辨電音?</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="songs.html">推薦歌曲</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
					<a class="nav-link2" href="chat.html">會員聊天區</a>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 30px;">
				</li>
					
				<li class="nav-item" style="list-style: none;margin-left: 10px;">
					<font style="color: white">歡迎<?php echo $_SESSION['account'];?>登入!!!!!</font>
				</li>
				<li class="nav-item" style="list-style: none;margin-left: 10px;">
					<a class="nav-link2" href="home.html">[登出]</a>
				</li>
			</ul>
		</div>
	</nav>

	<div>
		<div class="container-fluid">
			<div class="row" style="margin-left: 90px;">
				
				<div  class="col-md-10">
					<img src="rip.jpg"  width="50%" data-toggle="modal" data-target="#myModal" style="display:block; margin:auto; margin-top: 20px;"/>
					<!-- The Modal --> 
				</div>

				<div class="col-md-2" style="margin-top: 40px;">
					
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModal"> 
			<div class="modal-dialog modal-dialog-centered modal-lg"> 
				<div class="modal-content"> 
					<h1 align="center"><span style="font-size:40px; font-family: monospace, Microsoft JhengHei;"><b>緬懷Avicii</b></span></h1>
					<!-- Modal body -------------------------------------> 
					<div class="modal-body"> 
						<!--Carousel輪播----------------------------------> 
						<div id="demo" class="carousel slide" data-ride="carousel"> 
							<!-- Indicators指標 --> 
							<ul class="carousel-indicators"> 
								<li data-target="#demo" data-slide-to="0" class="active"></li> 
								<li data-target="#demo" data-slide-to="1"></li> 
								<li data-target="#demo" data-slide-to="2"></li> 
								<li data-target="#demo" data-slide-to="3"></li> 
								<li data-target="#demo" data-slide-to="4"></li> 
								<li data-target="#demo" data-slide-to="5"></li> 
								<li data-target="#demo" data-slide-to="6"></li> 
							</ul> 
							<!-- The slideshow 內容--> 
							<div class="carousel-inner"> 
								<div class="carousel-item active"> 
									<img src="a0.jpg"  width="800" height="600" id=modal1> 
								</div> 
								<div class="carousel-item"> 
									<img src="a1.jpg"  width="800" height="600" id=modal2> 
								</div> 
								<div class="carousel-item"> 
									<img src="a2.jpg"  width="800" height="600" id=modal3> 
								</div> 
								<div class="carousel-item"> 
									<img src="a3.jpg"  width="800" height="600" id=modal4> 
								</div> 
								<div class="carousel-item"> 
									<img src="a4.jpg"  width="800" height="600" id=modal5> 
								</div> 
								<div class="carousel-item"> 
									<img src="a5.jpg"  width="800" height="600" id=modal6> 
								</div> 
								<div class="carousel-item"> 
									<img src="a6.jpg"  width="800" height="600" id=modal7> 
								</div> 
							</div> 

							<!-- Left and right controls左右控制 --> 
							<a class="carousel-control-prev" href="#demo" data-slide="prev"> 
								<span class="carousel-control-prev-icon"></span> 
							</a> 
							<a class="carousel-control-next" href="#demo" data-slide="next"> 
								<span class="carousel-control-next-icon"></span> 
							</a> 
						</div> 
						<!--END OF Carousel 輪播結束--> 
					</div> 
					<!--modal body結束-------> 
				</div> 
			</div> 
		</div> 
		<!-- The end of Modal 結束 -->

	
	<div>		
		<img src="news.svg"  width="80%" style="display:block; margin:auto;"/>
	</div>

	<div class="container-fluid">
		<div class="row" style="margin-left: 90px;">
			<div  class="col-md-6">
				<a href="https://edm.com/news/breaking-avicii-found-dead-at-28" >   
					<img src="avicii.jpg"  width="85%"/>
				</a>
				<br>
				<a class="title" href="https://edm.com/news/breaking-avicii-found-dead-at-28" >
					<span style="font-size:28px;"><font  face="sans-serif"><b>BREAKING: AVICII FOUND DEAD AT 28</b></font></span>
				</a>
				<br>
				<b>
					<a class="weblink" href="https://edm.com" >
						<font color="#DC7633">edm.com</font>
					</a>
						<span style="font-size:14px;">, APRIL 20, 2018</span>	
				</b>		
				<br>
				This afternoon, 28-year-old Tim Bergling, best known by the EDM community<br>by his moniker Avicii was found dead in Muscat, Oman.....	

			</div>
			<div class="col-md-6">
				<a href="https://www.youredm.com/2018/04/20/deadmau5-skrillex-statements-about-avicii-death-togetherness-of-edm/" >   
					<img src="sk.jpg"  width="85%"/>
				</a>
				<br>
				<a class="title" href="https://www.youredm.com/2018/04/20/deadmau5-skrillex-statements-about-avicii-death-togetherness-of-edm/" >
					<span style="font-size:28px;"><font  face="sans-serif"><b>DEADMAU5 & SKRILLEX’S STATEMENTS<br> ABOUT AVICII’S DEATH SHOW THE <br>TRUE TOGETHERNESS OF EDM</b></font></span>
				</a>
				<br>
				<b>
					<a class="weblink" href="https://youredm.com" >
						<font color="#DC7633">YourEDM.com</font>
					</a>
						<span style="font-size:14px;">, APRIL 20, 2018</span>
				</b>		
				<br>
				Skrillex doesn’t always speak up on social media, but with the news of Avicii‘s <br>sudden passing — the producer shared some very personal and heartfelt<br>thoughts.....

			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row" style="margin-top: 50px; margin-left: 90px;">
			<div  class="col-md-6">
				<a href="https://www.edmsauce.com/2018/04/19/the-chainsmokers-somebody/" >   
					<img src="chainsmokers.jpg"  width="85%"/>
				</a>
				<br>
				<a class="title" href="https://www.edmsauce.com/2018/04/19/the-chainsmokers-somebody/" >
					<span style="font-size:28px;"><font  face="sans-serif"><b>THE CHAINSMOKERS RELEASE NEW EP <br>FEATURING ONE NEVER BEFORE HEARD <br>TRACK – ‘SOMEBODY’</b></font></span>
				</a>
				<br>
				<b>
					<a class="weblink" href="https://www.edmsauce.com/" >
						<font color="#DC7633">edmsauce.com</font>
					</a>
						<span style="font-size:14px;">, APRIL 19, 2018</span>	
				</b>		
				<br>
				The Chainsmokers have wasted no time in 2018 making a big statement. <br>The guys have strayed away from dance music in their most recent original <br>productions.....	

			</div>
			<div class="col-md-6">
				<a href="https://edmidentity.com/2018/04/14/hardwell-steve-aoki-anthem/" >   
					<img src="hs.jpg"  width="85%"/>
				</a>
				<br>
				<a class="title" href="https://edmidentity.com/2018/04/14/hardwell-steve-aoki-anthem/" >
					<span style="font-size:28px;"><font  face="sans-serif"><b>HARDWELL & STEVE AOKI <br>MAKE HISTORY WITH FIRST-EVER <br>“ANTHEM” COLLABORATION</b></font></span>
				</a>
				<br>
				<b>
					<a class="weblink" href="https://edmidentity.com/" >
						<font color="#DC7633">EDMIDENTITY.com</font>
					</a>
						<span style="font-size:14px;">, APRIL 14, 2018</span>
				</b>		
				<br>
				Forever destined to join forces in the studio, it was just a matter of time before <br>the sultans of the mainstage would collide to deliver.....

			</div>
		</div>
	</div>
	
	<br><br><br>
	<h1 align="center"><span style="font-size:16px;">©2018 EDMblog. All rights reserved.</span></h1>
	<br>
</body>
</html>