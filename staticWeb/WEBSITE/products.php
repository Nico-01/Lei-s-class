<?php


//1. connect to database
$server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "t8jnow42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";


$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
// take input from selected category;
if (isset($_GET["Category"])){
    echo "<h1>".$_GET["Category"]."</h1>";
    $sql = "select * from products where category = ".$_GET["Category"];
}else{
    $sql = "select * from products";
}


//3. run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    ?>
    <div class="gallery">
        <p><?php echo $row["name"]; ?></p>
        <p><?php echo $row["price"]; ?></p>
        <p><img width="200px" src="<?php echo $row["image"]; ?>"</p>
        <form action="addToCart.php" method="post">
            <input name="productID" value="<?php echo $row["id"]; ?>" type="hidden">
            <input name="qty" type="number" placeholder="QTY" min="0">
            <input type="submit" value="Add to cart">
        </form>
    </div>
    <?php
}
