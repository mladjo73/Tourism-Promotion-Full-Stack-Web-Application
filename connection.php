<?php
$host = "localhost";    // ili 127.0.0.1
$user = "root";         // korisničko ime
$pass = "";             // lozinka
$db   = "rafting_db";   // ime baze

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Greška pri konekciji: " . mysqli_connect_error());
}
?>