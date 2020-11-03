<?php
// Create a database connection
$server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "qrzgb3mx9k0wl0ko";
$dbpassword = "p2hohc6r9awsbfjy";
$dbname = "d9jdge5z2cy7qr3m";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error){
     echo $conn->error;
}else{
    echo "Connected";
}

// Write a query
$sql = "select * from users";
// Execute the query
$result = mysqli_query($conn, $sql);

// Show my result
while ($row = $result->fetch_assoc()) {
    echo $row["id"];
}

