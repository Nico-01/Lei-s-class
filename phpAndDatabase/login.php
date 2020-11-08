<?php
$username = $_POST["username"];
$password = $_POST["password"];

echo "Username:".$username;
echo "Password:".$password;

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

// create a query
$sql = "select * from users 
where username = '".$username."' and password = '".$password;."'";
echo $sql;

// run my query
$result = mysqli_query($conn, $sql);

//show my result
if ($result->num_rows > 1){
    echo "you have login";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
    }
}echo{
    echo "wrong username or password";
}

