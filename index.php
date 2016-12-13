<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
if (isset($_GET["e_msg"]) && $_GET["e_msg"] == 'failed') {
echo "Wrong Username / Password, please check your information!";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cart Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded = "false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"> Parduotuvė </a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class = "nav navbar-nav">
				<li><a href = "index.php"><span style = "right: 5px;" class = "glyphicon glyphicon-home"></span> Home </a></li>
				<li><a href = "index.php"><span style = "right: 5px;" class = "glyphicon glyphicon-tags"></span> Products </a></li>
				<li style = "width: 300px; left: 10px; top: 10px;"><input type = "text" class = "form-control" id = "search"></li>
				<li style = "top: 10px; left: 20px;"><input type = "submit" class = "btn btn-primary" id = "search_btn"></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style = "right: 5px;" class = "glyphicon glyphicon-shopping-cart"></span> My Cart <span class = "badge"> 0 </span></a>
					<div class="dropdown-menu" style="width:500px;">
						<div class="panel panel-danger">
							<div class="panel-heading">
									<center> Your cart is empty, please login to be able to add products to your cart! </center>
							</div>
						</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style = "right: 5px;" class = "glyphicon glyphicon-user"></span> Sign In </a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">
									<br>
									<br>
								</div>
								<div class="panel-footer" id="e_msg">
									<!-- DO wrong password/username message -->
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="customer_registration.php"><span style = "right: 5px;" class = "glyphicon glyphicon-edit"></span> Sign Up </a></li>
			</ul>
		</div>
	</div>
</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
						<!-- NUSKAITOM KATEGORIJAS -->
				</div>
				<div id="get_brand">
					<!-- NUSKAITOM BRANDUS -->
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
					</div>
					<div class = "panel-footer"><b><center>&copy; Dovydas Litvinas ir Ignas Šiaudkulis, 2016 VGTU</center></b></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
