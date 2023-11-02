<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can store this data in a text file.
    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
    $file = "form_data.txt";

    // Append the data to the text file.
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data stored successfully.";
    } else {
        echo "Error storing data.";
    }
}
?>
