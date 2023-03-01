<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact"];
    $user_data = "Name: $name\nAge: $age\nDate of Birth: $dob\nContact: $contact\n\n";
    $file_path = "user_data.txt";
    $file = fopen($file_path, "a");
    if (fwrite($file, $user_data)) {
        echo "User data added successfully";
    } else {
        echo "Error writing to file";
    }
    fclose($file);
}
?>
