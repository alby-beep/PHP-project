<?php
session_start();
$memberid=$_SESSION['memberid'];
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
<style>
    th,td{
        padding: 10px;
    }
    </style>
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
					<div class="register">
				<div class="container">
				<h2>REGISTER</h2>
		 
				 <div class="col-md-6  register-top-grid">
					<h3>ENGAGEMENT REGISTRATION</h3>
                                        <form method="post" action="engagementereg_action.php">
                                           
                                     <div>
						<span>Member ID</span>
                                               <?php echo $memberid;?>
					</div>
					<div>
						<span>Engagement Place</span>
                                                <input type="text" name="engagementplace" required pattern="[a-zA-Z\s]+"> 
					</div>
					<div>
                                            <span>Engagement Date</span>
                                            <input type="date" name="engagementdate"> 
					 </div>
					 <div>
						 <span>Spouse Name</span>
                                                 <input type="text" name="spousename" required pattern="[a-zA-Z\s]+"> 
					</div>
					
								
								<div class="register-but">
									<input type="submit" value="submit">
								</div>
					   </form>
					 </div>
				    <div class="col-md-6  register-top-grid">
                                        <h3>ENGAGEMENT DETAILS</h3>
                                    <?php
                                    include 'connection.php';
                                    $s="select * from engagement where memberid='$memberid'";
                                    $s1=  mysqli_query($con, $s);
                                    while ($s2=mysqli_fetch_assoc($s1))
                                    {
                                        ?>
                                    <table border="1">
                                         <tr><th>ENGAGEMENT DATE</th><td><?php echo $s2['engagementdate'];?></td></tr>
                                        <tr><th>ENGAGEMENT PLACE</th><td><?php echo $s2['engagementplace'];?></td></tr>
                                        <tr><th>SPOUSE NAME</th><td><?php echo $s2['spousename'];?></td></tr>
                                      
               <tr><th>STATUS</th><td><?php $s2['status'];?></td></tr>
                                    <?php
                                    }
                                   
                                    ?>
                                    </table>
                                </div>
				<div class="clearfix"> </div>
			</div>	
</div>
<!-- recent -->

			</div>
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
			<span>Email : </span><a href=""> stantonys@church.com</a>
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






