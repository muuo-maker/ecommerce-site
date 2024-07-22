<?php

@include 'configure.php';

if(isset($_POST['add_product'])){
   $product_category = $_POST['product_category']; // Corrected variable name
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Mama Kadogo Enterprise</title>
    <script src="https://kit.fontawesome.com/48dac2d1b2.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="header">
    <div class="container">
        <nav>
         <a href="index.html"> <div class="logo"><img src="images/logo3.jpeg" alt="logo"></div></a>   
         <ul id="sidemenu">
            <li><a href="#basic-info">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><div class="search">
                <input type="text" placeholder="Search ">
                <i class="fa-solid fa-magnifying-glass" ></i>
             </div></li>
            <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
         </ul> 
         <div class="search-mobile">
            <input type="text" placeholder="Search ">
            <i class="fa-solid fa-magnifying-glass" ></i>
         </div> 
         <div id="lg-bag-mobile"><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></div>       
         <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>
    </div>
  </div>
  <div  id="mobile-sidemenu">
    <h2>Categories</h2>
   <div onclick="location.href='products.php#Groceries'">Groceries</div>
   <div onclick="location.href='products.php#Kitchenware'">Kitchenware</div>
   <div onclick="location.href='products.php#Stationery'">Stationery</div>
   <div onclick="location.href='products.php#Refreshments'">Refreshments</div>
   <div onclick="location.href='products.php#Electronics'">Electronics</div>
   <div onclick="location.href='products.php#Toiletries'">Toiletries</div>
   <div onclick="location.href='products.php#Health'">Health and Beauty</div>
   <i class="fas fa-times" onclick="closemenu()"></i>   
</div>


    <!-- Login Form Popup -->
    <div id="loginForm" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="loginEmail" required>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <button class="btn" type="submit" >Login</button>
                <p>Don't have an account? <a href="#" id="showSignUp">Sign Up</a></p>
            </form>
        </div>
    </div>

    <!-- Sign Up Form Popup -->
    <div id="signUpForm" class="modal">
        <div class="modal-content">
            <span class="close" id="closeSignUp">&times;</span>
            <h2>Sign Up</h2>
            <form>
                <label for="signUpEmail">Email:</label>
                <input type="email" id="signUpEmail" name="signUpEmail" required>
                <label for="signUpPassword">Password:</label>
                <input type="password" id="signUpPassword" name="signUpPassword" required>
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <button class="btn" type="submit">Sign Up</button>
                <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
            </form>
        </div>
    </div>

  <div id="basic-info">
    <div class="container">
        <div class="row">
            <div class="head-text">
                <p>Mama Kadogo <br> Enterprise</p>
                <h1><i class="fa-solid fa-location-dot"></i> <span> Ngimu</span>, off Mombasa Road</h1>
                <div class="sign">
                    <div id="loginBtn"><a href="#"> <button class="btn">LogIn</button> </a> </div>
                <div id="signUpBtn" ><a href="#"> <button class="btn">SignUp</button> </a> </div>
                </div>
            </div>           
            <div class="slider-container">
                <div class="slider">
                    <input id="input1" type="radio" name="slider" class="slider_input">
                    <input id="input2" type="radio" name="slider" class="slider_input">
                    <input id="input3" type="radio" name="slider" class="slider_input">
                    <input id="input4" type="radio" name="slider" class="slider_input">
                    <input id="input5" type="radio" name="slider" class="slider_input">
                    <input id="input6" type="radio" name="slider" class="slider_input">

                 <label id="label1" for="input1" class="slider_img" style="background-image: url(images/stationery.jpeg);"></label>
                 <label id="label2" for="input2" class="slider_img" style="background-image: url(images/beauty.jpeg);"></label>
                 <label id="label3" for="input3" class="slider_img" style="background-image: url(images/footware.jpeg);"></label>
                 <label id="label4" for="input4" class="slider_img" style="background-image: url(images/groceries.jpeg);"></label>
                 <label id="label5" for="input5" class="slider_img" style="background-image: url(images/kitchen_utensils.jpeg);"></label>
                 <label id="label6" for="input6" class="slider_img" style="background-image: url(images/refreshments.jpeg);"></label>
                  
                </div>
                <div><a href="#feature"> <button class="btn">Explore</button> </a> </div>
            </div>
              </div>
        
    </div>
  </div>
 

  
<div class="container">
    <div id="feature" class="section-p1">
      <div class="fe-box">
          <img src="images/online-order.jpeg" alt="">
          <h6>Online Order</h6>
      </div>
      <div class="fe-box">
          <img src="images/saving.jpeg" alt="">
          <h6>Cost-effectiveness</h6>
      </div>
      <div class="fe-box">
          <img src="images/promo.jpeg" alt="">
          <h6>Promotions</h6>
      </div>
      <div class="fe-box">
          <img src="images/happy-sel.jpeg" alt="">
          <h6>Good service</h6>
      </div>
      <div class="fe-box">
          <img src="images/support.jpeg" alt="">
          <h6>Free 24/7 Support</h6>
      </div>
  </div>
  
  </div>
  <?php

$select = mysqli_query($conn, "SELECT * FROM products");

?>
  <main>
  <?php
          while($row = mysqli_fetch_assoc($select)){
       ?>
       <div class="card">
           <div class="image">
           <img src="uploaded_img/<?php echo $row['image']; ?>"height="100px" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="product_name"><?php echo $row['category']; ?></p>
               <p class="price"><?php echo $row['name']; ?></p>
               <p class="discount"><b><del>Ksh<?php echo $row['price']; ?>/-</del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
       <?php

          }
     ?>
  </main>
  

  <?php

  $select = mysqli_query($conn, "SELECT * FROM products");
  
  ?>


    <div id="product1" class="section-p1">
        <div class="container">
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
        <div class="pro" onclick="window.location.href='pro_details.html'">
            <img src="uploaded_img/<?php echo $row['image']; ?>"height="100px" alt="">
                <div class="des">
                    <span><?php echo $row['category']; ?></span>
                    <h5><?php echo $row['name']; ?></h5>
                    <h4>Ksh<?php echo $row['price']; ?>/-</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-bag"></i></a>
            </div>
            <?php } ?>  
    </div>  
</div>



<main>
  <?php
          while($row = mysqli_fetch_assoc($select)){
       ?>
       <div class="card">
           <div class="image">
           <img src="uploaded_img/<?php echo $row['image']; ?>"height="100px" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="product_name"><?php echo $row['category']; ?></p>
               <p class="price"><?php echo $row['name']; ?></p>
               <p class="discount"><b><del>Ksh<?php echo $row['price']; ?>/-</del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
       <?php

          }
     ?>
  </main>
  

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Get In Touch</h1>
                <p><i class="fa-solid fa-paper-plane"></i>vkioko703@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>0710914878</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/muuo_6?igsh=anQ1NHVpcmd6enBj"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://x.com/BrianMu29599009?t=-nvOETo4MrHTKgg4Y4CQxg&s=09"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://www.linkedin.com/in/brian-muuo-839239222"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100073210346523&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>

                </div>
                <h1><i class="fa-solid fa-location-dot"></i> <span> Ngimu</span>, off Mombasa Road</h1>
            </div>
            <div class="contact-right">
                <h2>How did you like our enterprise? 😊</h2>
                <form name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="text" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Comment/Complaint/Inquiry"></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>

<div id="newsletter">
    <div class="form">
        <p>Get E-mail updates about our latest products </p>
        <input type="text" placeholder="Your Email Address">
        <button class="normal">Sign Up</button>
    </div>
</div>

<div class="copyright">
    <p>Copyright © Brian. Made by muuo</p>
</div>
 <script src="index.js"></script>
 </body>