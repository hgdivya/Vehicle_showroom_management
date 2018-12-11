
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>vehicle showroom management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css 2/style.css" type="text/css" media="all">
	
	
	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->
<style>
.fill{
background-color:black;
padding:40px;
display:table-cell;
border:2px solid black;

transform:translate(130%,0%);
}
#form1{
	background-color:white;
	border:black thin solid;
	padding:10px;
	display:table-cell;
	text-align:right;
	transform:translate(50%,40%);
	
}
label{
	font:italic;
	color:rgb(139,0,194);
}

input{
	color:brown;
}
h1{
	color:blue;
}
body{
	color:green;
	font-weight:bold;
	font-size:15px;
	background-color:grey;

}
.fill2{
	#background-image:url(images1/16.jpg);
	background-color:black;

}
</style>
</head>

<!-- Body -->
<body>

<!-- banner -->
	<div class=" banner">
		<div class="wthree-different-dot">
			<!-- header -->
			<div class="header">
				<div class="container">
						
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
							
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
								
						  </button>
							<div class="w3layouts-logo">
							<center>
									<h1 style="font-size:30px;text-shadow: 2px 2px blue;position:absolute;left:0px;"><a href="index.html">VEHICLE SHOWROOM MANAGEMENT</a></h1>
						</center>
							
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						
							
							
								<ul class="nav navbar-nav">
								
									<li><a href="home1.php">HOME</a></li>
									<li><a href="registration.html">REGISTER</a></li>
									<li><a href="login.html">LOGIN</a></li>
									<li><a href="#timings">TIMINGS</a></li>
									<li><a href="#contact us">GET IN TOUCH</a></li>
									
								
								
							 </ul>
							</nav>
						
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<!-- //header -->
			<div class="banner-top">
					<div class="slider">
					
						<div class="callbacks_container">
						
							<ul class="rslides callbacks callbacks1" id="slider4">
							 
								<li>	
								<div class="wthree-different-dot">
									<div class="banner_text" >
									<div class="container">
										<div  class="w3-container w3-center w3-animate-top">
								<div id="movetxtl">
									
									<h1 style="text-align:center;font-size: 50px;color: #fff;text-transform: capitalize;font-weight: 600;">Welcome to the <br>Motor World</h1>
									<p style="font-align:left;font-size:20px;color:white;"></p>
									</div></div>
									<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">RATING</a>
										</div>
						
                 						<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
								</div>
								</li>
								<li>
								<div class="wthree-different-dot">	
									<div class="banner_text" >
									<div class="container">
										<div  class="w3-container w3-center w3-animate-top">
								<div id="movetxtr">
										               <h1 style="text-align: center;font-size:50px;color:#fff;text-transform: capitalize;font-weight: 600;">Looking for a new bike/car?</h1>
														<p style="font-align:right;font-size:20px;color:white;"></p>
                    
									</div>
									</div>
									<br>
									<br>
									<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">RATING</a>
										</div>
						
										<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
									</div>
								
								
							</ul>
						</div>
					</div>
				</div>
			<br>

		
	<!-- //banner -->
	

<!-- welcome -->
<br>
				
<br>
<br>
<br>
<br>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										 <div class="sec-title">

<center><h1>NICE TO MEET YOU</h1></center>
<form  id="form1"action="#" method="POST">
<label for="rating">Rate out of 5:</label>
<input type='number' name='rating' value=""><br><br>
<input type='submit'>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicledb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo " ";
$sql = "INSERT INTO RATING VALUES ('$_POST[rating]')";

if (mysqli_query($conn, $sql)) {
    echo "<br>"." "."<br>";

} else {
    echo " ";
}


?>
<br>
<br>
<h1 style="font-size:20px;">AVERAGE RATING</h1>
<br>

<?php
$sql ="call rate()";
$result=mysqli_query($conn, $sql);

$res=$result->num_rows; 
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo $r["avg(rating)"]."/5";
    echo " ";
	}

	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
				

								 
								</div> 
								</div>
								</div>
							</div>

							</div>
							
			
<div class="fill2">
<div class="fill">

<div class="tes">

		<p> <a name="timings">
		
		
		<br>
		<br>
		<center>
		
			<h3 style="color:rgb(255,255,255);font-size:30px;font-weight:bold;">Hours of Operation</h3>
			<br>
			<br>
			<br>
			
			<p style="color:grey;font-weight:bold;">Sunday:8:30am - 7:00pm</p><br>
			<p style="color:grey;font-weight:bold;">Monday - Friday:8:30am - 9:00pm</p><br>
			<p style="color:grey;font-weight:bold;">Saturday:8:30am - 8:00pm</p>
		<br>
		<br>
		<br>
			</center>
		</a></p>
		
	</div>	
	
		
</div>	

</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		
		<p> <a name="contact us">
		<center>
			<h3>Get in touch</h3>
			<p style="color:white;">Vehicle showroom,Whitefield</p>
			<p style="color:white;">Bangalore 560067</p><br>
			<p style="color:white;" class="phone">phone: 8792943044</p><br>
			<p style="color:white;" class="phone">Mail: hgdivya22@gmail.com</p>
			</center>
		</a></p>
		
	</div>
</div>
<!-- //footer -->

<!-- copyright -->

<!-- //copyright -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

					<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
					<!--banner Slider ends Here-->
			
				
		<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 100,
							time: 1000
						});
					});
				</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->


	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

			<!-- FlexSlider-JavaScript -->
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
	<!-- //FlexSlider-JavaScript -->

</body>
<!-- //Body -->
</html>