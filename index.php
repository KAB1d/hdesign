<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>K & K HOME DESIGNS</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100;1,300;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	*{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
	
}
.header{
	min-height: 100vh;
	width: 100%;
	background-image: linear-gradient(rgba(4,9,12,0.7),rgba(4,9,12,0.7)),url(cec.jpg);
	background-position: center;
	background-size: cover;
	position: relative;
}

nav{
	display: flex;
	padding: 2% 6%;
	justify-content: space-between;
	align-items: center;
}
nav img{
	width: 100px;
	height: 100px;
}
.nav-links{
	flex: 1;
	text-align: right;
}
.nav-links ul li{
	list-style: none;
	display: inline-block;
	padding: 8px 12px;
	position: relative;
}
.nav-links ul li a{
	color: #fff;
	text-decoration: none;
	font-size: 13px;
}
.nav-links ul li::after{
	content: '';
	width: 0%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
}
.nav-links ul li:hover::after{
	width: 100%;

}

.text-box{
	width: 90%;
	color: #fff;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.text-box h1{
	font-size: 62px;
}
.text-box p{
	margin: 10px 0 40px;
	font-size: 14px;
	color: #fff;
  
}

.hero-btn{
	display: inline-block;
	text-decoration: none;
	color: #fff;
	border: 1px solid #fff;
	padding: 12px 34px;
	font-size: 13px;
	background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
	border: 1px solid #f44336;
	background: #f44336;
	transition: 1s;
}

nav .fa{
	display: none;
}
@media(max-width: 700px){
	.text-box h1{
	font-size: 20px;
   }
   .nav-links ul li{
   	display: block;
   }
   .nav-links {
   	position: absolute;
   	background: skyblue;
   	height: 100vh;
   	width: 200px;
   	top: 0;
   	right: -200px;
   	text-align: left;
   	z-index: 2;
   	transition: 1s;
   }
   nav .fa{
   	display: block;
   	color: #fff;
   	margin: 10px;
   	font-size:22px;
   	cursor: pointer;
   }
   .nav-links ul{
   	padding: 30px;
   }
}

</style>
</head>
<body>
	<section class="header">
		<nav>
			<a href="centimeter.html"><img src="log.jpg"></a>
				
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>

					<li><a href="homepic.php">HOME</a></li>
					<li><a href="aboutus.php">ABOUT</a></li>
					<li><a href="login.html">LOGIN</a></li>
					<li><a href="contactus.php">CONTACT</a></li>

				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>	
				<div class="text-box">
			<h1>K & K Home Designs</h1>
			<marquee><p>Making design is now one of the easiest thing for interior and exterior design. Design is brightness of our environments.	
			</p></marquee>
			<a href="homepic.php" class="hero-btn">Visit Us To know More</a>

		</div>


	</section>

	


    <!------JavaScript for Toggle Menu------->
<script >
	var navLinks=document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right="0";
	}
	function hideMenu(){
		navLinks.style.right="-200px";
	}
</script>


 
</body>
</html>