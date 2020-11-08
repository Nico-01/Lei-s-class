<?php
//start a session
@session_start();
//get session's value
$username = $_SESSION["username"];
echo "<p>Username:".$username."</p>";

$password = $_SESSION["password"];
echo "Password:".$password;

$color = $_SESSION["color"];
echo "Color:".$color;

$address = $_SESSION["Address"];
echo "Address:".$address;
