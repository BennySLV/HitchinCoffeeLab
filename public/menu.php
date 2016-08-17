<!DOCTYPE html>
<html>
<head>
	<title>Menu | Hitchin Coffee Lab</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<!-- Site Icon -->
	<link rel="icon" type="image/jpeg" href="images/logo.jpg" />
</head>
<body>
	<div class="container">
		<?php include 'views/header.php'; ?>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12">
					<h1>Menu</h1>
					<h3>Check out our Food &amp; Drink menus below. We've got something for everyone!</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<img id="food-menu" src="images/food-menu.png" />
				</div>
				<div class="col-sm-6">
					<img id="drink-menu" src="images/drink-menu.png" />
				</div>
			</div>			
		</div> <!-- End of .jumbotron -->
		<?php include 'views/footer.php'; ?>
	</div> <!-- End of .container -->
</body>
</html>