<?php
//1. connect to database
$server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "qrzgb3mx9k0wl0ko";
    $dbpassword = "p2hohc6r9awsbfjy";
    $dbname = "d9jdge5z2cy7qr3m";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
$sql = "select * from category";

//3. run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    ?>
<li><a href="index.php?category=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
<?php
}
