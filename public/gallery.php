<!DOCTYPE html>
<html>
<head>
	<title>Gallery | Hitchin Coffee Lab</title>
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />

	<!-- Site Icon -->
	<link rel="icon" type="image/jpeg" href="images/logo.jpg" />
</head>
<body>
	<div class="container">
		<?php include 'views/header.php'; ?>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12">
					<h1>Gallery</h1>
					<h4>Check out our photos and see what Hitchin Coffee Lab really is about!</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="photo" id="photo-1">
						<img src="images/two-coffees(2).jpg" />
						<div class="photo-description">Flat-white - a hot favourite!</div>
					</div>	
				</div><!-- End of first photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-2">
						<img src="images/interior_2.jpg" />
						<div class="photo-description">A big turnout today!</div>
					</div>
				</div><!-- End of second photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-3">
						<img src="images/donut.jpg" />
						<div class="photo-description">We love donuts, (as you can tell)!</div>
					</div>
				</div> <!-- End of third photo -->
			</div><!-- End of first .row -->
			<br />
			<div class="row">
				<div class="col-sm-4">
					<div class="photo" id="photo-4">
						<img src="images/cakes.jpg" />
						<div class="photo-description">We also love cakes!</div>
					</div>	
				</div><!-- End of fourth photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-5">
						<img src="images/blending.jpg" />
						<div class="photo-description">How we make awesome coffee!</div>
					</div>
				</div><!-- End of fifth photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-6">
						<img src="images/pictures.jpg" />
						<div class="photo-description">Awesome painting from local artists!</div>
					</div>
				</div> <!-- End of sixth photo -->
			</div><!-- End of second .row -->
			<br />
			<div class="row">
				<div class="col-sm-4">
					<div class="photo" id="photo-7">
						<img src="images/lobby.jpg" />
						<div class="photo-description">Hard at work!</div>
					</div>	
				</div><!-- End of seventh photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-8">
						<img src="images/training.jpg" />
						<div class="photo-description">Training to be an awesome coffee-maker!</div>
					</div>
				</div><!-- End of eigth photo -->
				<div class="col-sm-4">
					<div class="photo" id="photo-9">
						<img src="images/art.jpg" />
						<div class="photo-description">Main art for Hitchin Coffee Lab!</div>
					</div>
				</div> <!-- End of ninth photo -->
			</div><!-- End of first .row -->					
		</div><!-- End of .jumbotron -->
		<?php include 'views/footer.php'; ?>
	</div><!--End of .container -->
</body>
</html>