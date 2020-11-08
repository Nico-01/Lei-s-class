<?php
//start a sesssion
@session_start();
//set values to session variables
$_SESSION["username"] = "nic";
$_SESSION["password"] = "valen";
$_SESSION["color"] = "red";
$_SESSION["Address"] = "139 Carrington Road";
?>

<html>
<head>
    <title>Session Exercise</title>
</head>
<body>
<ul>
    <li><a href="page1.php">Page 1</a></li>
    <li><a href="page2.php">Page 2</a></li>
    <li><a href="page3.php">Page 3</a></li>
    <li><a href="page4.php">Page 4</a></li>
    <li><a href="page5.php">Page 5</a></li>
</ul>
</body>
</html>
