<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>	Holy Church a Religious Category Flat Bootstarp Responsive Website Template | prayer :: w3layouts</title>
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
					<div class="bottom-left">
					<a href="memberreg.php">Member Registration</a>
                                        <a href="login.html">Log in </a>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>	
				<div class="container">
				<div class="head-na">
					<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
								<li><a href="index.html">HOME</a></li><label>|</label>
								<li><a href="ourmission.html">OUR MISSION</a></li><label>|</label>
								<li><a href="services.html">SERVICE</a></li><label>|</label>
								
								
								<li class="active"><a href="viewevents.php">EVENTS</a></li><label>|</label>
								
								<li><a href="contact.html">CONTACT</a></li>
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
	<!-- prayer -->
	<div class="prayer">
		<div class="container">
			<h2>EVENTS</h2>
			<div class="prayer-top">
				<?php
                                include 'connection.php';
                                $s="select * from events";
                                $s1=  mysqli_query($con, $s);
                                ?>
                            <table border="1">
                                <tr><th>EVENT NAME</th><th>EVENT DESCRIPTION</th><th>EVENT DATE</th><th>EVENT TIME</th></tr>
                           <?php
                                while ($s2=  mysqli_fetch_assoc($s1))
                                {
                                    $name=$s2['name'];
                                     $des=$s2['descr'];
                                      $date=$s2['mdate'];
                                       $time=$s2['mtime'];
                                       ?>
                                <tr><td><?php echo $name?></td><td><?php echo $des?></td><td><?php echo $date?></td><td><?php echo $time?></td></tr>
                              <?php
                                }
                                ?>
                            </table>
				<div class="clearfix"> </div>
			</div>
			<div class="prayer-top">
				
				<div class="clearfix"> </div>
			</div>
			<div class="prayer-top">
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- prayer -->
				
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