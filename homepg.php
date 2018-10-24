<?php
session_start();
$con = mysqli_connect("localhost","root","");
if($con)
{
//echo "Welcome<br>";
}
if(mysqli_select_db($con,"user1"))
{
	//echo "database selected<br>";
}
?>
<html>
<head>
<title>My Blog</title>
	<link rel=stylesheet type="text/css" href="style.css">
	</head>
<body>
<div id="header">
	<div class="container">
	<a id="header-title" href="homepg.php">MY Blog</a>
	<ul id="header-nav">
		<li><a href="about.html">About</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="logout.php" class="logout">Logout</a></li></ul>
	</div>
	<?php 
			$a=$_SESSION['name'];
			echo "Welcome ". $a;
            ?>
</div>
<div id="content">
	<div class="post-container">
	   <div class="post">
		 <div class="post-author">
		   <img src="cet1.jpg">
		   <span>Suraj</span>
		 </div>
		<p class="post-date">Today</p>
		<h3 class="post-title">Becoming a web developer</h3>
		<div class="post-content">
		   <p>If somebody would have told me a week a go that i would be able to make a website, I would not have believed them</p>
		   <p>Just a few days ago i started learning</p>
		   </div>
		</div>
	</div>
		<div class="post-container">
		<div class="post">
		 <div class="post-author">
		   <img src="oneplus6.jpg">
		   <span>Oneplus</span>
		 </div>
		<p class="post-date">Today</p>
		<h3 class="post-title">Most Popular Mobile</h3>
		<div class="post-content">
		   <p>I have the most Resonable and enhanced featured Mobile Phones Around The Globe</p>
		   <p>Just a few days ago i Launched My another version</p>
		   </div>
		</div>
	</div>
	</div>
<div id="footer">
	<div class="container">
	<div class="column">
		<h4>My Links</h4>
		<p>
		<a href="https://facebook.com/Suraj Shetty">Facebook</a>
		<br>
		<a href="https://instagram.com/ssuraj">Instagram</a>
		</p>
		</div>
	<div class="column">
		<h4>My Story</h4>
		<p>Hi there! I'm an Aspiring <strong>Web Developer</strong> </p>
		</div>
	</div>
</div>	
</body>
</html>
