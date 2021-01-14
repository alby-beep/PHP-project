<?php //
include 'connection.php';
session_start();
$id=$_SESSION['memberid'];
?>
<html>
<head>
<title>	Holy Church a Religious Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="HolyChurch Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="head-left">
					<ul class="number">
						<li><span>Next Worship : Sunday at 10:00am</span></li>					
					</ul>
				</div>
				
					<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				 <div class="logo">
      <h1><a href=""><span>ST.Antony's church,Ellakkal</span><small><br>It's in you to give..</small></a></h1>
    </div>
			
					<div class="clearfix"> </div>
			</div>
		</div>
						
				<div class="container">
				<div class="head-na">
					<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
                                                    <li class="active"><a href="userhome.php">HOME</a></li><label>|</label>
                                                       
                                                        <li><a href="familyreg.php">FAMILY REGISTRATION</a></li><label>|</label>
								
								
                                                        <li><a href="baptismreg.php">BAPTISM REGISTRATION</a></li><label>|</label>
								 <li><a href="engagement.php">ENGAGEMENT REGISTRATION</a></li><label>|</label>
                                                        <li><a href="marriagereg.php">MARRIAGE REGISTRATION</a></li><label>|</label>
                                                               <li><a href="viewprofile.php">VIEW PROFILE</a></li><label>|</label>
                                                        <li><a href="logout.php" data-hover="LOG OUT">LOG OUT</a></li>
									<div class="clearfix"> </div>
							</ul>
					</div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 
				</div>
				</div>
				
	</div>
	<!-- header -->
	<!-- slider -->
	<div class="container">
	<div class="confess-top">
			<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="confess">
										<div class="col-md-7 confess-left">
                                                                                    <img width="100" height="281" src="images/church.jpg" >
										</div>
										<div class="col-md-5 confess-right">
											<h2>If We Confess Your Sins, He is Faithful and Just to Forgive</h2>
											<p>The Shrine of St. Antony situated in ellakal, Kerala is one of the biggest pilgrim centres of St. Antony in the world; perhaps second only to Padua in terms of popularity.This Shrine belongs to the Archdiocese of Verapoly and is under the pastoral and administrative care of the Metropolitan Archbishop of Verapoly.</p>
												
										</div>										
											<div class="clearfix"> </div>
									</div>
								</li>
								
								
								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
				</div>
				</div>
					<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
	<!-- slider -->
	
<!-- recent -->

			</div>
		</div>
		<div class="col-md-3 rooted-right">
			<div class="wor">
				<h3>Worship Services</h3>
				<ul>
					<li><a href="#">• Tuesdays at 9:00 am</a></li>
					<li><a href="#">• Fridays at 9:45 am</a></li>
					<li><a href="#">• Saturdays at 10:00 am</a></li>
					<li><a href="#">• Sundays at 10:00 am</a></li>
				</ul>
			</div>
			
			
		<div class="clearfix"> </div>
	</div>
	</div>
	<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="col-md-3 loc">
			<h3>Our Location</h3>
			<p>ST Antony's Church 
			Kunchithanny Road
			ellakal,idukki</p>
			<p><span>Telephone :</span> (+91) 944 966 988</p>
			<span>Email : </span><a href="mailto:example@gmail.com">stantonys@church.com</a>
		</div>
	
		<div class="col-md-3 or">
			<h3>Our Church</h3>
			<li><a href="ourmission.html">• Our Mission</a></li>
			<li><a href="services.html">• Service</a></li>
		
			<li><a href="viewevents.php.html">• Prayers</a></li>
		</div>
		
		<div class="clearfix"> </div>
	</div>
	</div>
	<div class="footer-bottom">
	<div class="container">
		<p>Copyrights © 2018 ST Antony's Church All rights reserved | 
	</div>
	</div>
	
	<!-- footer -->
</body>
</html>

