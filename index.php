<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // You can retrieve other form fields in a similar way

    // You should perform validation on the data here

    // Construct the email message
    $to = "shs.abigailestrada@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\n"; // Add other form fields to the message

    // Send the email
    mail($to, $subject, $message);

    // Redirect to a thank you page or display a success message
    header("Your email has been sent! ");
    exit();
}

?>
