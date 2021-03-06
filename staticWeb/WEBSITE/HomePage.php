<?php include "sessionStart.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HomePage</title>
<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
<script src="js/script.js"></script>
</head>

<body>
<!-- Header and menu as navigation bar -->
<a href="HomePage.php"><img class="logo" src="images/logo.png"></a>

<img class="delivery" src="images/Delivery.PNG">

<div class="navbar">
<div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
	
    <div class="dropdown-content">
      <a href="allproducts.php">Products</a>
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
    <a href="registerForm.html">Register</a>
    <a href="cart.php">Cart</a>
</div>
<a href="cart.php"><img class="cart" src="images/Cart.PNG"></a>

<!-- Content -->

<div class="slideshow-container">

  <!-- 3 Slides -->
  <div id="slide1" class="mySlides fade">
  <!-- Image source: https://www.istockphoto.com/photo/dry-pet-food-gm1131841641-299825912?utm_source=pixabay&utm_medium=affiliate&utm_campaign=SRP_image_sponsored&referrer_url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fpet%2520food%2F&utm_term=pet+food -->
  <img src="images/dogandbowl.jpg" 
style="width:100%">
    <div class="text">Welcome to Pet Food Shop</div>
  </div>

  <div class="mySlides fade">
    <!-- Image source: https://www.istockphoto.com/photo/dog-catching-a-biscuit-gm1152663825-312807545?utm_source=pixabay&utm_medium=affiliate&utm_campaign=SRP_image_sponsored&referrer_url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fpet%2520food%2F&utm_term=pet+food -->
    <img src="images/dogandtreat.jpg" style="width:100%">
    <div class="text">We have the best quality food for your pets</div>
  </div>

  <div class="mySlides fade">
  <!-- Image source: https://www.istockphoto.com/photo/dry-pet-food-gm1131841641-299825912?utm_source=pixabay&utm_medium=affiliate&utm_campaign=SRP_image_sponsored&referrer_url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fpet%2520food%2F&utm_term=pet+food -->
    <img src="images/food.jpg" style="width:100%">
    <div class="text">Check out our available products</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<table id = "maintable">
<tr>

<div id = "inputemail">
<form>
  <label for="email" style="color:white; font-weight: bold;">Subscribe to the newsletter for exclusive offers and deals:</style></label><br>
  <input type="text" id="email" name="email" value="Enter email address here"> <input type="submit" value="Submit">
</form>
    <?php include "login.php"; ?>
</div>

</tr>
</table>

<!-- Footer -->
<div id="footer">&copy; Pet Food Shop, NZ , 2020</div>

</body>
</html>