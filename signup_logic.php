<?php
// Database connection file ko include karein
include('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password']; 

    // SQL query data insert karne ke liye
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account Created! Now Login.'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>