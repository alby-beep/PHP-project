<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
    th,td
    {
        border: 1px solid black;
        padding: 10px;
        
    }
    table
    {
        margin-top: 100px;
        margin-bottom: 100px;
        
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
                                                    <li class="active"><a href="adminhome.php">HOME</a></li><label>|</label>
                                                    <li><a href="viewmembers.php" data-hover="VIEW MEMBER REGISTRATION">VIEW MEMBER REGISTRATION</a></li><label>|</label>
                                                    <li><a href="viewfamily.php" data-hover="VIEW FAMILY REGISTRATION">VIEW FAMILY REGISTRATION</a></li><label>|</label>
								
								
                                                    <li><a href="viewbaptism.php" data-hover="VIEW BAPTISM REGISTRATION">VIEW BAPTISM REGISTRATION</a></li><label>|</label>
								 <li><a href="viewengagement.php" data-hover="VIEW ENGAGEMENT REGISTRATION">VIEW ENGAGEMENT REGISTRATION</a></li><label>|</label>
                                                    <li><a href="viewmarriage.php" data-hover="VIEW MARRIAGE REGISTRATION">VIEW MARRIAGE REGISTRATION</a></li><label>|</label>
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
	<h2></h2>
          
		 
				 <div class="col-md-6  register-top-grid">
					    <h3>View Marriage Details</h3>
        
        
        <form name="frmm" method="post" action="viewmarriageaction.php">
<center>
    <table >
  <tr>
      <th scope="row">Member ID</th> <th scope="row">Marriage Date</th><th scope="row">Marriage Place</th> <th scope="row">Spouse Name</th><th scope="row">Status</th><th scope="row" colspan="2">Remarks</th>
  </tr>
  
  <?php
  include 'connection.php';
  $s="select * from marriage";
  $s1=  mysqli_query($con, $s);
  while ($s2=  mysqli_fetch_assoc($s1))
  {
      $marriagedate=$s2['marriagedate'];
      $marriageplace=$s2['marriageplace'];
      $sname=$s2['spousename'];
     $id=$s2['memberid'];
      $status=$s2['status'];
      
     
      
      
  
  ?>
    <tr><td><?php echo $id; ?></td><td><?php echo $marriagedate; ?></td>
 <td><?php echo $marriageplace; ?></td><td><?php echo $sname; ?></td><td><?php echo $status; ?></td>
 

 <td><a href="marapprove.php?id=<?php echo $id;?>">APPROVE</a></td><td><a href="mardelete.php?id=<?php echo $id;?>">DELETE</a></td></tr>
  

    <?php
  }
  ?>
        </table>
</center>
</form> 
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






