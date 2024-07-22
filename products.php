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
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a class="active" href="contact.html">Contact</a></li>
                <li><div class="search">
                    <input type="text" placeholder="Search ">
                    <i class="fa-solid fa-magnifying-glass" ></i>
                 </div></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                <i class="fas fa-times" onclick="closemenu()"></i>
             </ul>
             <div class="search-mobile">
                <input type="text" placeholder="Search ">
                <i class="fa-solid fa-magnifying-glass" ></i>
             </div> 
             <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
        </div>
      </div>
      <div  id="mobile-sidemenu">
        <h2>Categories</h2>
        <a href="#Groceries"><div onclick="closemenu()" id="beauty">Groceries</div></a>
        <a href="#Kitchenware"><div onclick="closemenu()" id="beauty">Kitchenware</div></a>
        <a href="#Stationery"><div onclick="closemenu()" id="beauty">Stationery</div></a>
        <a href="#Refreshments"><div onclick="closemenu()" id="beauty">Refreshments</div></a>
        <a href="#Electronics"><div onclick="closemenu()" id="beauty">Electronics</div></a>
        <a href="#Toiletries"><div onclick="closemenu()" id="beauty">Toiletries</div></a>
        <a href="#Health"><div onclick="closemenu()" id="beauty">Health and Beauty</div></a>  
       <i class="fas fa-times" onclick="closemenu()"></i>   
    </div>
    
 <div class="products">
  <div class="container">
        <div class="categories">
            <h2>Categories</h2>
           <a href="#Groceries"><div id="beauty">Groceries</div></a>
           <a href="#Kitchenware"><div id="beauty">Kitchenware</div></a>
           <a href="#Stationery"><div id="beauty">Stationery</div></a>
           <a href="#Refreshments"><div id="beauty">Refreshments</div></a>
           <a href="#Electronics"><div id="beauty">Electronics</div></a>
           <a href="#Toiletries"><div id="beauty">Toiletries</div></a>
           <a href="#Health"><div id="beauty">Health and Beauty</div></a>   
            

        </div>  
        <div class="contents">
            <img name = "slide" width="800" height="400" class="slide">
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
               <p class="product_category"><?php echo $row['category']; ?></p>
               <p class="product_name"><?php echo $row['name']; ?></p>
               <p class="price">Ksh <?php echo $row['price']; ?>/-</p>
           </div>
       </div>
       <?php

          }
     ?>
  </main>
  


        
 

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
</html>
