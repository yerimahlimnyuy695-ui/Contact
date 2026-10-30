<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "contact_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql2 = "SELECT * FROM mycontacts";
$result = $conn->query($sql2);

if (!$result){
    die("Query failed:" . $conn->error);
}
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Contact_id</th><th>Name</th><th>Email</th><th>Contact</th></tr>";

    while ($row =  $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['contact_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "</td>";
    }
    echo "</table>";
} else {
    echo "No data found";
}
$conn->close();
?>
