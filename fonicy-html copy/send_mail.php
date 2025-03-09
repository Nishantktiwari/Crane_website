<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $from_location = htmlspecialchars($_POST["from_location"]);
    $to_location = htmlspecialchars($_POST["to_location"]);
    $equipment = htmlspecialchars($_POST["equipment"]);
    $rental_duration = htmlspecialchars($_POST["rental_duration"]);
    $additional_requirements = htmlspecialchars($_POST["additional_requirements"]);

    $to = "tnishnat77555@gmail.com";
    $subject = "New Quote Request from $name";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "From: $from_location\n";
    $message .= "To: $to_location\n";
    $message .= "Equipment: $equipment\n";
    $message .= "Rental Duration: $rental_duration\n";
    $message .= "Additional Requirements: $additional_requirements\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your request has been submitted successfully.'); window.location.href='get-quote.html';</script>";
    } else {
        echo "<script>alert('There was an error submitting your request. Please try again later.'); window.location.href='get-quote.html';</script>";
    }
} else {
    header("Location: get-quote.html");
    exit();
}
?>
