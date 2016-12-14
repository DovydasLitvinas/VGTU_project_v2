<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<!DOCTYPE> 

<html>
	<head>
		<title>Admin Panel</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div>
		<h1 style="text-align:center;"><a href="index.php" style="color:black; text-decoration:none;">Menu<a/></h1>
			<table style="width:100%; text-align:center;">
			<tr><th><a href="index.php?insert_product">Insert New Product</a></th>
			<th><a href="index.php?view_products">View All Products</a></tr>
			</table>
			<table style="width:100%; text-align:center;">
			<tr><th><a href="index.php?insert_cat">Insert New Category</a></th>
			<th><a href="index.php?view_cats">View All Categories</a></tr>
			</table>
			<table style="width:100%;text-align:center;">
			<tr><th><a href="index.php?insert_brand">Insert New Brand</a></th>
			<th><a href="index.php?view_brands">View All Brands</a></tr>
			</table>
			<table style="width:100%;text-align:center;">
			<tr><th><a href="index.php?view_customers">View Customers</a></th>
			<th><a href="logout.php">Admin Logout</a></tr>
			</table>

		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		if(isset($_GET['insert_brand'])){
		
		include("insert_brand.php"); 
		
		}
		
		if(isset($_GET['view_brands'])){
		
		include("view_brands.php"); 
		
		}
		if(isset($_GET['edit_brand'])){
		
		include("edit_brand.php"); 
		
		}
		if(isset($_GET['view_customers'])){
		
		include("view_customers.php"); 
		
		}
		
		?>
		</div>






	</div>


</body>
</html>

<?php } ?>