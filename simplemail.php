		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<?php
		// Please specify your Mail Server - Example: mail.yourdomain.com.
		ini_set("SMTP","smtp-relay.gmail.com");

		// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
		ini_set("smtp_port","587");

		// Please specify the return address to use
		ini_set('sendmail_from', 'luke@bluestonecreative.com');

		// Set parameters of the email
		$to = "luke@bluestonecreative.com";
		$subject = "Test mail";
		$message = "Hello! This is a simple email message.";
		$from = "info@bluestonecreative.com";
		$headers = "From: $from";

		// Mail function that sends the email.
		mail($to,$subject,$message,$headers);
		?>
    </body>
</html>