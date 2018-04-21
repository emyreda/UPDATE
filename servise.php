<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


    <title>Airline plane</title>

     <link rel="stylesheet" href="Content/bootstrap.css">
	 <link rel="stylesheet" href="css/style.css">
     
     



</head>
<body>
<!-- start our navbar-->
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top " rol="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" href="home.html">
					<img  src="images/icon/airplane-128.png" alt="logo" class="logo" />
					Travel<span> AnyTime</span>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="new 1.html">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="booking.html">Booking</a></li>
					<li><a href="servise.php">Services</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Information</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Modify Flight</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Requests</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Groups</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Hotels</a></li>
						</ul>
					</li>
				</ul>
      
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<!-- End our navbar-->
	
<!-- start our carousel-->
	<div id="myslide" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators hidden-xs">
		<li data-target="#myslide" data-slide-to="0" class="active"></li>
		<li data-target="#myslide" data-slide-to="1"></li>
		<li data-target="#myslide" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img class="slide" src="images/slides/000345271W.jpg" alt="1" style="width:100%; height:400px;"/>
		  
		</div>
		<div class="item">
		  <img class="slide" src="images/slides/flight1320x742.jpg" alt="2" style="width:100%; height:400px;"/>
		 
		</div>
		<div class="item">
		  <img class="slide" src="images/slides/aa.jpg" alt="3" style="width:100%; height:400px;"/>
		  
		</div>
		
	  </div>

	  
	</div>
<!-- End our carousel-->

<!--WElcome section-->
	<section class="about text-center">
		<div class="contaner">
			<h1>WElcome to our servise<span>Travel AnyTime</span></h1>
			<p class="lead"> Here You Can Ask Us About Any Thing About Recieve Ticket ,Services OR place and Time of Flight</p>
		</div>
	</section>
<!--End WElcome section-->

<!--start contactus section-->
	<section class="contact-us text-center">
		<div class="field">
			<div class="container">
				<div class="row">
					<h1>Tell Us What You Want<span>.....?</span></h1>
				<p class="lead">Feel Free To Contact US Anytime</p>
				
				<!--start contact form-->
					<form rol="form" action="servise.php" method="post" >
						<div class="col-md-6">
							<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Please Enter Your Name" name="uname">
							</div>
							
							<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Please Enter Your E-mail" name="mail">
							</div>
							
							<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Please Enter Your Cell Phone" name="phone">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<textarea class="form-control input-lg" placeholder="Please Enter Your Message" name="txtarea"></textarea>
							</div>
							<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Contact Us">
						</div>
					</form>
				
				<!--end contact form-->
				</div>
				
			</div>
		</div>
	
	</section>
<!--End contactus section-->

<!--start progres section-->
	<section class="skills ">
		<div class="container">
			<h1 class="text-center">Our Progress</h1>
			<div class="row">
				<!-- start progres icon-->
						<div class="col-md-5">
							<div class="skills-progres">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										Services
									</div>
								</div>
								
								<div class="progress">
									<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
										Preparing The Plane
									</div>
								</div>
								
								<div class="progress">
									<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
										Safety
									</div>
								</div>
								
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										Payment
									</div>
								</div>
								
								
							</div>
						</div>
					<!-- start progres icon-->
				
					<!-- start info icon-->
						<div class="col-md-6 col-md-offset-1">
							<div class="skills-info">
								<h3> About Our Company</h3>
								<p class="lead"> Our Company Is The Frist on The Spead Flight And Safety ,It has A frist Prize in Prepar The Plane.</p>
								<button type="button" class="btn btn-primary">Talk With Professional</button>
							</div>
						</div>
					<!-- start info icon-->
			</div>
			
		</div>
	</section>
<!--End progres section-->

<!--start our footer-->
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3>Site Map</h3>
					<ul class="list-unstyled three-columns">
						<li>Home</li>
						<li>Booking</li>
						<li>Servises</li>
						<li>More</li>
					</ul>
					<ul class="list-unstyled social-list">
						<li><a href="https://www.facebook.com/?stype=lo&jlou=AffezZvb-PiHjJxdfGmuUKZA8uiYCo8WWnFzAXgygNI_e0M7VEo5vSEDSO4GiGhjcXVesKhvLiXjUv3zAWA0p1Vpi4xG6JlS7QgChjen2AbzFw&smuh=1358&lh=Ac8AdjXInEB1ABUz"> <img class="img"  src="images/footer/icon_facebook_128.png" alt="facebook" class="social_widget_icon" /></a></li>
						<li><a href="mailto:"><img class="img" src="images/footer/icon_google_128.png" alt="gmail" class="social_widget_icon" /></a></li>
						<li><a href=" https://www.youtube.com/channel/">  <img class="img" src="images/footer/icon_youtube_128.png" alt="youtube" class="social_widget_icon" /></a></li>
						<li><a href="https://twitter.com/"> <img class="img" src="images/footer/icon_tumblr_128.png" alt="twitter" class="social_widget_icon" /></a></li>
						<li><a href="https://www.linkedin.com/in//"> <img class="img" src="images/footer/icon_linkedin_128.png" alt="linkedin" class="social_widget_icon" /></a></li>
						
					</ul>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<h3>Latest News</h3>
					<div class="media">
						<a class="pull-left" href="#">
						  <img class="media-object im" src="images/footer/clipboard.png" alt="chick">
						</a>
						<div class="media-body">
							<h4 class="media-heading">
								Chickig
							</h4>
							this is some text About Chiccking Describe the booking in our site.
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="#">
						  <img class="media-object im" src="images/footer/map.png" alt="map">
						</a>
						<div class="media-body">
							<h4 class="media-heading">
								Map
							</h4>
							this is some text About how to use the map becouse it is very important to know your distenation.
						</div>
					</div>
					<div class="media">
						<a class="pull-left" href="#">
						  <img class="media-object im" src="images/footer/compass.png" alt="compass">
						</a>
						<div class="media-body">
							<h4 class="media-heading">
								compass
							</h4>
							this is some text About how to use compass to know your direction.
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-12">
					<h3>Our Awesome Work</h3>
					<img class="imaa img-thumbnail" src="images/footer/1367357ecc9c91a8bd_lhjjhr.jpg" alt="1"/>
					<img class="imaa img-thumbnail" src="images/footer/barcelona-barcelo-raval-260792-1_osc948.jpg" alt="2"/>
					<img class="imaa img-thumbnail" src="images/footer/goodwp.com_24221.jpg" alt="3"/>
					<img class="imaa img-thumbnail" src="images/footer/business-class.jpg" alt="4"/>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
			Copyright&copy;2017 <span> Your Template Name</span>.Travel Anytime
		</div>
	</section>
<!--End our footer-->





<script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
   
</body>
</html>
<?php
mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("air")or die("no db found");
if(isset($_POST['submit'])){
$Username=$_POST['uname'];
$E_mail=$_POST['mail'];
$Cell_Phone=$_POST['phone'];
$Textarea=$_POST['txtarea'];
$q="insert into contactWithUs(Username,E_mail,Cell_Phone,Textarea)values('$Username','$E_mail','$Cell_Phone','$Textarea')";
$AddMCResult = mysql_query($q);
header('Location: home.html');

if(mysql_query($AddMCResult)){
echo "data inserted";
}
else{
	echo "error";
}
}

?>
