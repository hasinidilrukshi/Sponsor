<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $companyName=$_POST['companyName'];
    $responsiblepersonname=$_POST['responsiblepersonname'];
    $companyposition=$_POST['companyposition'];
    $contactnumber=$_POST['contactnumber'];
    $packageID=$_POST['packageID'];
    $packagetype=$_POST['packagetype'];
    $packageprice=$_POST['packageprice'];

    $sql="insert into `sponsor` (companyName,responsiblepersonname,companyposition,contactnumber, packageID ,packageType ,packageprice ) values(' $companyname','$Responsiblepersonname','$companyposition','$contactnumber', $packageID','$packagetype','$packageprice')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "<script>alert('Choose package Succefully'); window.location.href = 'display.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>HarmonyHigh Music Awards</title>
   <link rel="stylesheet" href="choosePackage.css"> 
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
<section id="banner">
    <img src="img/logo.png" class="logo">
    <div class="banner-text">
        <h1>SPONSOR PROFILE</h1>
    </div>
</section>

<div id="sideNav">
    <nav>
    <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="winners.html">WINNERS</a></li>
        <li><a href="#">SINGERS</a></li>
        <li><a href="#">PRODUCERS</a></li>
        <li><a href="#">SPONSERS</a></li>
        <li><a href="about.html">ABOUT</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="img/menu.png" id="menu">
</div>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">"
    </head>
  <body>
    <div class="container my-5"> 
    <form method="post">
  <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" placeholder="Enter your company name" name="companyname" autocomplete="off">
  </div>
 
  <div class="form-group">
    <label>Responsible person name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="Responsiblepersonname" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Company position</label>
    <input type="text" class="form-control" placeholder="Enter your Song Links" name="companyposition" autocomplete="off">
  </div>
  <div class="form-group">
    <label>contact number</label>
    <input type="text" class="form-control" placeholder="Enter your company position" name="contactnumber" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Package ID</label>
    <input type="text" class="form-control" placeholder="Enter package id" name="PackageID" autocomplete="off">
  </div>
  <div class="form-group">
    <label>package Type</label>
    <input type="text" class="form-control" placeholder="Enter package type" name="packagetype" autocomplete="off">
  </div>
  <div class="form-group">
    <label>package price</label>
    <input type="text" class="form-control" placeholder="Enter your package price" name="packageprice" autocomplete="off">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    <script>
		var menuBtn = document.getElementById("menuBtn")
		var sideNav = document.getElementById("sideNav")
		var menu = document.getElementById("menu")
		
		sideNav.style.right = "-250px";
		
		menuBtn.onclick = function(){
			if(sideNav.style.right == "-250px"){
				sideNav.style.right = "0";
				menu.src = "img/close.png";
			}
			else{
				sideNav.style.right = "-250px";
				menu.src = "img/menu.png";
			}   
		}
		</script>
		<script src="http://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
		<footer>
			<div class="container">
				<div class="footer-content">
					<h3>Contact us</h3>
					<p>Email:<br>Harmonyhigh@award.com</p>
					<p>Phone:<br>+94 11 545 8941</p>
					<p>Address:<br>SLIIT Malabe Campus, New Kandy road, Malabe</p>
				</div>
				<div class="footer-content">
					<h3>Quick Link</h3>
					<ul class="list">
						<li><a href="home.html">Home</a></li>
						<li><a href="winners.html">WINNERS</a></li>
						<li><a href="">SINGERS</a></li>
						<li><a href="">PRODUCERS</a></li>
						<li><a href="">SPONSERS</a></li>
						<li><a href="about.html">ABOUT</a></li>
					</ul>
				</div>
				<div class="footer-content">
					<h3>Follow us</h3>
					<ul class="social-icons">
					<li><a href=""><i class="fab fa-facebook"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href=""><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="button-bar">
				<a href="contact.html">Contact us</a>
				<a href="pri.html"> || privacy policy</a>
				<p>&copy; 2024 HarmonyHigh Company All right reserved.</p>
			</div>
		</footer>

  </body>
</html>