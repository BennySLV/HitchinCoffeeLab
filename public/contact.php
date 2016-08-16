<!DOCTYPE html>
<html>
<head>
	<title>Contact | Hitchin Coffee Lab</title>
	<!-- Accompanying stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/contact.css" />

	<!-- Site Icon -->
	<link rel="icon" type="image/jpeg" href="images/logo.jpg" />

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Accompanying JavaScript -->
	<script type="text/javascript" src="js/contact.js"></script>
</head>
<body>
	<div class="container">
		<?php include 'views/header.php'; ?>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-6">
					<h1>Contact</h1>
					<h3>Come and say hello!</h3>
					<p>Talk to us (we won't bite)!</p>
					<p>We are on <a href="https://www.facebook.com/Hitchin-Coffee-LAB-548073462007766/" target="_blank">Facebook</a>, <a href="https://twitter.com/hitchincoffee" target="_blank">Twitter</a> and <a href="https://www.instagram.com/explore/locations/1028005710/" target="_blank">Instagram</a>.</p>
					<h3>Address</h3>
					<p>29 Sun Street,<br />Hitchin,<br />Hertfordshire,<br />SG5 1AH</p>
					<p>We are right opposite The Sun Hotel. And are easily accessible by public transport.</p>
				</div>
				<div class="col-sm-6">
					<h3>Opening Hours</h3>
					<table id="opening-hours">
						<tr>
							<th>Day</th>
							<th>Hours</th>
						</tr>						
						<tr>
							<td>Monday-Saturday</td>
							<td>09:00-17:00</td>
						</tr>
						<tr>
							<td>Sunday</td>
							<td>10:00-15:00</td>
						</tr>
					</table><br />
					<button id="contact-form-button">Alternatively, please click here to use the contact form</button>
					<form id="contact-form" action="contact.php" method="post" autocomplete="off">
						<fieldset><legend id="form-instructions">Please fill in all fields</legend>			
							<p><input id="first-name" type="text" name="first_name" placeholder="First Name" /> <span id="first-name-flag"><i aria-hidden="true"></i></span> <span id="first-name-validation"></span></p>
							<p><input id="surname" type="text" name="surname" placeholder="Surname" /> <span id="surname-flag"><i aria-hidden="true"></i></span> <span id="surname-validation"></span></p>
							<p><input id="email" type="email" name="email" placeholder="Email" /> <span id="email-flag"><i aria-hidden="true"></i></span> <span id="email-validation"></span></p>
							<p><input id="confirm-email" type="email" name="confirm_email" placeholder="Confirm Email" /> <span id="confirm-email-flag"><i aria-hidden="true"></i></span> <span id="confirm-email-validation"></span></p>
							<p><textarea id="message" placeholder="Message..." rows="5" cols="19"></textarea> <span id="message-flag"><i aria-hidden="true"></i></span> <span id="message-validation"></span></p>
							<button id="reset-button" name="resetButton" value="Reset">Reset</button><br /><br />
							<input id="send-button" type="submit" name="submit" value="Send" />
							<button id="form-close-button">X Close</button>
						</fieldset>
					</form>					
				</div><!-- End of .row -->
			</div><br />
			<div class="row">
				<div class="col-sm-12">					
					<iframe id="map-directions" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2459.299933201359!2d-0.2809358488796533!3d51.94672177961019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487633fa726f2bc5%3A0x8f1075b73a7da4eb!2s29+Sun+St%2C+Hitchin+SG5+1AH!5e0!3m2!1sen!2suk!4v1470666923273" width="1020" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div><!-- End of .jumbotron -->
		<?php include 'views/footer.php'; ?>
	</div><!-- End of .container -->
</body>
</html>