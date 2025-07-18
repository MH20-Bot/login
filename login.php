<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login"; 
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    echo "Login Successful";
} else {
    echo "Invalid email or password";
}
$conn->close();
?
