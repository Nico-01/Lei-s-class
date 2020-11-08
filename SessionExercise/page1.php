<?php
//start a session
@session_start();
//get session's value
$firstname = $_SESSION["firtstname"]
//(removable)
// $SESSION["message"] = $_POST["message"];
// echo "Message:".$message;
echo "User Firstname:".$firstname;

//*Code below can be removed because it's on github
//get session's value 2
//$username = $_SESSION["username"];
//echo "<p>Username:".$username."</p>";
//
//$password = $_SESSION["password"];
//echo "<p>Password:".$password."</p>";
//
//$color = $_SESSION["color"];
//echo "<p>Color:".$color."</p>";
//
//$address = $_SESSION["Address"];
//echo "<p>Address:".$address."</p>";
//*^
