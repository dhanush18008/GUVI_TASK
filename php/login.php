<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "my_username" && $password == "my_password") {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}
?>
