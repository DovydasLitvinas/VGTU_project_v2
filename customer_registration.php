<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">E-Shop</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href = "index.php"><span style = "right: 5px;" class = "glyphicon glyphicon-home"> Home </a></li>
				<li><a href = "index.php"><span style = "right: 5px;" class = "glyphicon glyphicon-tags"> Products </a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><b> Registration form </b></div>
					<div class="panel-body">

					<form method="post">
						<div class="row">
							<div class="col-md-12">
								<label for="name">First Name</label>
								<input type="text" id="name" name="name" class="form-control">
							</div>
							
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="c_password">password</label>
								<input type="password" id="c_password" name="c_password"class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="c_repassword">Re-enter Password</label>
								<input type="password" id="c_repassword" name="c_repassword"class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="c_contact">Mobile</label>
								<input type="text" id="c_contact" name="c_contact"class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="c_address">Address Line</label>
								<input type="text" id="c_address" name="c_address"class="form-control">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<label for="c_city">City</label>
								<input type="text" id="c_city" name="c_city"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="c_country">Country</label>
								<input type="text" id="c_country" name="c_country"class="form-control">
							</div>
						</div>
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>

					</div>
					</form>
					<div class="alert alert-warning"><center>Please read our <a href = "#"><b> Terms of service </b></a> before continuing registration.</center></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
