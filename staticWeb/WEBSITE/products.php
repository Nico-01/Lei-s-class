<?php
//1. connect to database
$server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "qrzgb3mx9k0wl0ko";
$dbpassword = "p2hohc6r9awsbfjy";
$dbname = "d9jdge5z2cy7qr3m";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. write a query
$sql = "select * from products";

//3. run the query on the connection
$result = mysqli_query($conn, $sql);

//4. show result
while ($row = $result->fetch_assoc()) {
    echo $row["id"]."</td>";
    echo $row["productName"]."</td>";
    echo $row["pricePerUnit"]."</td>";
    echo $row["category"]."</td>";
    echo $row["image"]."</td>";
}
?>

</html>