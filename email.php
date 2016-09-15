<?php // Sending Email
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Form validation
	if (!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['comments']) ) {
		$body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";
		
		// Limits the body to 70 characters
		$body = wordwrap($body, 70);
		
		//Send the email
		mail('jcsong.89@gmail.com', 'Contact Form Submission', $body, "From: {$_POST['email']}");
		
		//Print a message:
		echo '<p><em>Thank you for contacting me. I will reply as soon as possible.</em></p>';
		
		// Clear $_POST so that the form isn't sticky
		$_POST = array();
		
	}	else {
		echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
	}
}
?> 
