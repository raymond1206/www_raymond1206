<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if name, email, and message are empty
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    $errors = [];

    // Validate inputs
    if (empty($name)) {
        $errors[] = "Name cannot be empty.";
    }
    if (empty($email)) {
        $errors[] = "Email cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Optional: Validate email format
        $errors[] = "Invalid email format.";
    }
    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    // Process the form if there are no errors
    if (count($errors) === 0) {
        // Process your form: send email, save to database, etc.
        $to = "raymond_portfolio@raymond1206.com"; // Replace this with your email address
        $subject = "New Form Submission";
        $headers = "From: $email";
        
        // Mail content
        $mailContent = "Name: $name\n";
        $mailContent .= "Email: $email\n\n";
        $mailContent .= "Message:\n$message";
        
        // Send email
        if(mail($to, $subject, $mailContent, $headers)) {
            $response["message"] = "Thank you! Your message has been sent. The form will reset in 10 seconds.";
        } else {
            $response["message"] = "Oops! Something went wrong and we couldn't send your message.";
        }
        echo "Form submitted successfully!";
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
