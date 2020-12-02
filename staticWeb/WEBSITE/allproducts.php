<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- Comments look like this, remember to do a title -->
<title>allProducts</title>
<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
</head>


<body>
<a href="HomePage.php"><img class="logo" src="images/logo.png"></a>
<img class="delivery" src="images/Delivery.png">
 
<div class="navbar">
<div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Categories.html">Categories</a>
    </div>
 </div>
  
  
  <div class="dropdown2">	
	<button class="dropbtn2">Customer Service
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content2">
      <a href="PrivacyInformation.html">Privacy Information</a>

    </div>
  </div> 
  
  <a href="AboutUs.php">About Us</a>
  <a href="Contact.html">Contact</a>
    <a href="cart.php">Cart</a>
</div>
<a href="HomePage.php"><img class="cart" src="images/cart.png"></a>

<!-- Gallery -->
 <div class="product">
     <div id="header">
         <?php include "products.php"; ?>
         <?php include "login.php"; ?>
         <?php include "logout.php"; ?>
         <?php include "register.php"; ?>


 </div>
 </div>

<div id="footer">&copy; Pet Food Shop, NZ , 2020</div>

</body>
</html>