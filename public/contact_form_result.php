<!DOCTYPE html>
<html>
<head>
	<title>Contact Form Submission Result | Hitchin Coffee Lab</title>
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
				<h1>Result</h1>
				<?php 
					// Check for form submission:
					if($_SERVER['REQUEST_METHOD'] == 'POST') {

						/* Form field Regular Expression Variables */
						$firstNameRegex = '/^[a-zA-Z -]{3,16}$/';
						$surnameRegex = '/^[a-zA-Z -]{3,16}$/';
						$emailRegex = '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/';
						$messageRegex = '/^[a-zA-Z0-9?$@#()\'!,+\-=_:.&€£*%\s]+$/';

						/* If the form is filled with ALL details 
							- AND all fields contain suitable characters
							- AND the two email addressed entered match
						*/
						if(!empty($_POST['firstName']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['confirmEmail']) && !empty($_POST['message'])) {
							if(preg_match($firstNameRegex, $_POST['firstName']) && preg_match($surnameRegex, $_POST['surname']) && preg_match($emailRegex, $_POST['email']) && preg_match($emailRegex, $_POST['confirmEmail']) && preg_match($messageRegex, $_POST['message'])) {
								if($_POST['email'] === $_POST['confirmEmail']) {

									// Store all data
									$firstName = $_POST['firstName'];
									$surname = $_POST['surname'];
									$email = $_POST['email'];
									$confirmEmail = $_POST['confirmEmail'];
									$message = $_POST['message'];

									// Confirmation message
									echo '<p>Thank You! Your message was sent successfully! A confirmation email has been sent to <b>'. $confirmEmail . '</b>.</p></div>';

									// Email construction
									$to = $confirmEmail; // Send to the confirmed email address entered by the user in the contact form
									$subject = "Hitchin Coffee Lab - Contact Form Submission Confirmation";
									$emailMessage = "Hey $firstName,\n\nThank You for submitting your message!\n\nWe will get back to you as soon as possible.\n\nKind regards, \n\nHitchin Coffee Lab";
									$headers = "From: mail@hitchincoffeelab.co.uk\r\n";
									$headers .= "Return-Path: mail@hitchincoffeelab.co.uk";

									// Send email
									mail($to, $subject, $emailMessage, $headers);
								}
								else { // If the two email addresses entered do not match
									echo '<p>Sorry, we could not process your request at this time. Please check that the two email-addresses entered match.</p></div>';
									}									
								}
							else { // If any field is invalid (i.e. contains any illegal characters)
								echo '<p>Sorry, we could not process your request at this time. Please check that all fields contain valid data before submitting.</p></div>';
							}																 
						}
						else { // If any fields are not filled 
							echo '<p>Sorry, we could not process your request at this time. Please check if you have filled all the form fields as required.</p></div>';
						}
					} // End of form submission
				?>
			</div> <!-- End of .jumbotron -->
		<?php include 'views/footer.php'; ?>
	</div> <!-- End of .container -->
</body>
</html>