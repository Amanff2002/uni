<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $date = $_POST["Date"];
    $email = $_POST["email"];
    $contact = $_POST["Contact"];
    $course = $_POST["course"];
    $message = $_POST["message"];

    echo "Registration Information:<br>";
    echo "First Name: $fname<br>";
    echo "Last Name: $lname<br>";
    echo "Date of Birth: $date<br>";
    echo "Email: $email<br>";
    echo "Contact Details: $contact<br>";
    echo "Course: $course<br>";
    echo "Message: $message<br>";
}
?>
