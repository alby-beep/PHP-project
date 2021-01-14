<?php //
include 'connection.php';
session_start();
$id=$_SESSION['memberid'];
    $username=$_SESSION['username'];
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
        <div class="register">
	<div class="container">
	<h2>REGISTER</h2>
          
		 
				 <div class="col-md-6  register-top-grid">
					    <h3>View Profile</h3>
                                            <?php
                                            include 'connection.php';
                                            $s="select * from member where username='$username'";
                                            $s1=  mysqli_query($con, $s);
                                            while($s2=  mysqli_fetch_assoc($s1))
                                            {
                                            ?>
							<form method="post" action="#">
                                                            <table>
                                                                <tr><th>Member ID :</th><td><?php echo $id;?></td></tr>
                                                                <tr><th>Name :</th><td><?php echo $s2['name'];?></td></tr>
                                                                <tr><th>Birth Place :</th><td><?php echo $s2['birthplace'];?></td></tr>
                                                                <tr><th>Contact No :</th><td><?php echo $s2['contactnumber'];?></td></tr>
                                                                        <tr><th>Fathers Name :</th><td><?php echo $s2['fathersname'];?></td></tr>
                                                                         <tr><th>Mothers Name :</th><td><?php echo $s2['mothersname'];?></td></tr>
                                                                         <tr><th>Fathers Parish :</th><td><?php echo $s2['fathersparish'];?></td></tr>
                                                                          <tr><th>Mothers Parish :</th><td><?php echo $s2['mothersparish'];?></td></tr>
                                                                     
                                                                 <tr><th>Age :</th><td><input type="text" name="age" placeholder="<?php echo $s2['age'];?>"></td></tr>
                                                                   <tr><th>Qualification :</th><td><input type="text" name="qualification" placeholder="<?php echo $s2['qualification'];?>"></td></tr>
                                                                      <tr><th>Monthly Salary :</th><td><input type="text" name="salary" placeholder="<?php echo $s2['monthlysalary'];?>"></td></tr>
                                                                      <tr><th>Password:</th><td><input type="password" name="pass"></td></tr>
                                                          	
								
								
                                                            
								
							
                                                                      <tr><td><input type="submit" value="UPDATE" name="up"><td></tr>
                                                            
                                                            </table>
							</form>
                                            <?php
                                            }
                                            if(isset($_POST['up']))
                                            {
                                            $age=$_POST['age'];
                                            $qua=$_POST['qualification'];
                                            $salary=$_POST['monthlysalary'];
                                            $pass=$_POST['pass'];
                                            $u="update member set age='$age',qualification='$qua',monthlysalary='$salary',password='$pass' where username='$username'";
                                            $up=  mysqli_query($con, $u);
                                             $u1="update signup set password='$pass' where username='$username'";
                                            $up1=  mysqli_query($con, $u1);
                                            if($up==TRUE)
                                            {
                                                echo "<script> alert ('update succesfully');window.location='viewprofile.php'</script>";
                                            }
                                            else
                                            {
                                                 echo "<script> alert ('failed');window.location='viewprofile.php'</script>";
                                            }
                                            }
                                            ?>
					 </div>
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

