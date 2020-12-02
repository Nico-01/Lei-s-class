<?php
//check session
session_start();
//kill all sessions
session_destroy();
header('location: allproducts.php');
?>



