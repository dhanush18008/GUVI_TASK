<?php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "database_name";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $sql = "INSERT INTO users (username, password, age, dob, contact)
            VALUES ('$username', '$password', '$age', '$dob', '$contact')";
    if (mysqli_query($conn, $sql)) {
        echo "User data added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
