<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];
if ($firstname == "" || $lastname==""){
    //1. connect to database
    $server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "qrzgb3mx9k0wl0ko";
    $dbpassword = "p2hohc6r9awsbfjy";
    $dbname = "d9jdge5z2cy7qr3m";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `address`, `phoneNumber`) 
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";

//3. run the query
    if (mysqli_query($conn, $sql)){
        echo "data has been inserted";
    }else{
        echo "data has not been inserted";
    }
}
else{
    echo "there should not be empty input";
}


echo "<a href='index.php'>Home</a>";
