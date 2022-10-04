<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # FIX: Replace this email with recipient email
    $mail_to = "maheshniwate10@gmail.com";
    
    # Sender Data
    
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
   
    
    if ( empty($email) OR !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }
    
  

    # Send the email.
    $success = mail($mail_to);

    if ($success) {
        # Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        # Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong, we couldn't send your message.";
    }

} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>
