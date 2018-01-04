<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WEBDESIGN :: Register</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/lib.js"></script>
</head>

<body>

<div id="wrapper">
<div id="wrapper-inner">
	<img src="images/icon-stat.png" alt="" border="0" id="icon-star" />
	<header>
		<div id="logo"><img src="images/logo.png" alt="" border="0" /></div>
		<div id="banner">
			<h2 class="site-name">WebDesign </h2>
			<div class="slogan">Slogan</div>
		</div>
		<div class="clear"></div>
	</header>
	<nav>
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Giới thiệu</a></li>
			<li><a href="#">Sản phẩm</a>
				<ul id="menuItem-sanpham">
					<li>Laptop</li>
					<li>Tabless</li>
					<li>iPhone</li>
					<li>Smartphone</li>
				</ul>
			</li>
			<li><a href="#">Dịch vụ</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
	</nav>
	<article id="main">
		<aside id="left">
			
			<section class="block">
				<div class="div-rotate">PASS</div>
				<div class="block-title"><h2>Đăng nhập</h2></div>
				<div class="block-content">
					<form method="post" action="">
					<div class="block-item">
						
						<label>Ký danh:</label>
						<input type="text" name="txtUser" id="txtUser" value="Nhập ký danh" class="form-text" />
						<div class="clear"></div>
					</div>
					<div class="block-item">
						<label>Mật khẩu:</label>
						<input type="password" name="txtPass" id="txtPass" class="form-text" />
						<div class="clear"></div>
					</div>
					<input type="submit" name="btnSubmit" id="btnSubmit" value="Đăng nhập" class="form-submit" />
					</form>
				</div>
			</section>
			
			<section class="block">
				<img src="images/icon_design.png" alt="" class="test-image">
			</section>
		
		</aside>
		
		<aside id="right">
			
			<div class="block">
				<div class="block-title"><h2>Tiêu điểm hình ảnh</h2></div>
				<div class="block-content">
					<marquee direction="up" scrollamount="3">
					<div style="text-align:center;">
						<img src="images/feat6.jpg" width="180" border="0" alt="" vspace="5" />
						<img src="images/feat5.jpg" width="180" border="0" alt="" />
					</div>
					</marquee>
				</div>
			</div>
		
		</aside>
		
		<section id="content">
		  <div>
            <h1>Trang đăng ký thành viên</h1>
	      </div>
		  
		  
		  <div id="form-register">
		  
		  <form class="cmxform" id="signupForm" method="get" action="">
		<fieldset>
			<legend>Validating a complete form</legend>
			<p>
				<label for="firstname">Firstname</label>
				<input id="firstname" name="firstname" type="text">
			</p>
			<p>
				<label for="lastname">Lastname</label>
				<input id="lastname" name="lastname" type="text">
			</p>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
			</p>
			<p>
				<label for="confirm_password">Confirm password</label>
				<input id="confirm_password" name="confirm_password" type="password">
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email">
			</p>
			<p>
				<label for="agree">Please agree to our policy</label>
				<input type="checkbox" class="checkbox" id="agree" name="agree">
			</p>
			<p>
				<label for="newsletter">I'd like to receive the newsletter</label>
				<input type="checkbox" class="checkbox" id="newsletter" name="newsletter">
			</p>
			<fieldset id="newsletter_topics">
				<legend>Topics (select at least two) - note: would be hidden when newsletter isn't selected, but is visible here for the demo</legend>
				<label for="topic_marketflash">
					<input type="checkbox" id="topic_marketflash" value="marketflash" name="topic">Marketflash
				</label>
				<label for="topic_fuzz">
					<input type="checkbox" id="topic_fuzz" value="fuzz" name="topic">Latest fuzz
				</label>
				<label for="topic_digester">
					<input type="checkbox" id="topic_digester" value="digester" name="topic">Mailing list digester
				</label>
				<label for="topic" class="error">Please select at least two topics you'd like to receive.</label>
			</fieldset>
			<p>
				<input class="submit" type="submit" value="Submit">
			</p>
		</fieldset>
	</form>
		  
	      </div>
		</section>

		
		<div class="clear"></div>
	</article>
	<footer>Footer</footer>
	
</div>
</div>

</body>
</html>
