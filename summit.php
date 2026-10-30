<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "contact_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['email']);
    $email = mysqli_real_escape_string($conn, $_POST['number']);

    $sql = "INSERT INTO mycontacts (name, email, contact) VALUES ('$name', '$email', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " .$conn->error;
    }
} 

$conn->close();
?>