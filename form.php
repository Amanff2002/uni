<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["Email"];
    $message = $_POST["message"];

 
    echo "Contact Information:<br>";
    echo "First Name: $fname<br>";
    echo "Last Name: $lname<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
}
?>







