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
//echo "Username:".$username;
//
//$password = $_SESSION["password"];
//echo "Password:".$password;
//
//$color = $_SESSION["color"];
//echo "Color:".$color;
//
//$address = $_SESSION["Address"];
//echo "Address:".$address;
//*^