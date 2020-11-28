<?php
@session_start();
$userID = $_SESSION["userID"];
function createDatabaseConnection(){
    //1. connect to database
    $server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "qrzgb3mx9k0wl0ko";
    $dbpassword = "p2hohc6r9awsbfjy";
    $dbname = "d9jdge5z2cy7qr3m";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

//1 connection
$conn = createDatabaseConnection();

//2 first query
$sql = "select * from orders where userID = $userID";

//3 run the first query
$result = mysqli_query($conn, $sql);

//4 show the first query
while ($row = $result->fetch_assoc()){
    echo "<h3>Order Number: ".$row["orderNum"]."</h3>";
    echo "<h3>Shipping Address: ".$row["shipAddress"]."</h3>";
    echo "<h3>Time: ".$row["orderdate"]."</h3>";

    // second query
    $sql2 = "select * from orderedProducts where orderID = ".$row["orderNum"];
    // run the second query
    $result2 = mysqli_query($conn, $sql2);
    while ($row2 = $result2->fetch_assoc()){
        echo "<p>ID: ".$row2["productID"]." Qty: ".$row2["qty"]."</p>";
    }
}
