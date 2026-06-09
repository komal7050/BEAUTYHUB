<?php
// Ye aapke website ko database se connect karega
$conn = mysqli_connect('localhost', 'root', '', 'beauty_db', '3307');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>