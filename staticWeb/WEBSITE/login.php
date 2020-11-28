<?php
if (isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //1. create a database connection
    $server = "u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "qrzgb3mx9k0wl0ko";
    $dbpassword = "p2hohc6r9awsbfjy";
    $dbname = "d9jdge5z2cy7qr3m";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    //2. create a query
    $sql = "select * from users 
            where username = '$username' and 
            password = '$password'";

    //3. run the query
    $result = mysqli_query($conn, $sql);

    //4. show result
    if ($result->num_rows == 1) {
        echo "you have login ";
        while ($row = $result->fetch_assoc()) {
            echo $row["firstname"];
            //start a session
            @session_start();
            //set a session variable
            $_SESSION["userID"] = $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
        }
    } else {
//        echo "wrong username or password";
        ?>
 <p>wrong username or password</p>
 <?php
    }



}


if (!isset($_SESSION["userID"])){

?>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>"  method="post">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="Post">
    </form>
<?php
}else{

    echo '<a href="logout.php">logout</a>';

}
?>