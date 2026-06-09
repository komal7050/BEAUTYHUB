<?php
include 'config.php'; 

if(isset($_POST['add_to_cart'])){
   $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      echo '<script>alert("Product already added to cart!");</script>';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      echo '<script>alert("Product added to cart!");</script>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BeautyHub | Products</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

      * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

      body {
         background: linear-gradient(45deg, #fbdae0, #bbd2c5);
         min-height: 100vh;
         padding: 40px 20px;
      }

      .nav-container {
         text-align: right;
         width: 100%;
         max-width: 1200px;
         margin: 0 auto 30px auto;
      }

      .cart-btn {
         background: #004d40;
         color: white;
         padding: 12px 25px;
         text-decoration: none;
         border-radius: 50px;
         font-weight: bold;
         box-shadow: 0 4px 15px rgba(0,0,0,0.2);
         transition: 0.3s;
      }

      .heading {
         text-align: center;
         color: #004d40;
         font-size: 35px;
         margin-bottom: 50px;
         text-transform: uppercase;
         letter-spacing: 2px;
         font-weight: 700;
      }

      .container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
         gap: 30px;
         width: 100%;
         max-width: 1200px;
         margin: 0 auto;
      }

      .card {
         background: rgba(255, 255, 255, 0.25);
         backdrop-filter: blur(15px);
         -webkit-backdrop-filter: blur(15px);
         border: 1px solid rgba(255, 255, 255, 0.3);
         border-radius: 25px;
         padding: 25px;
         text-align: center;
         box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
         transition: 0.4s ease;
      }

      .card:hover { transform: translateY(-10px); background: rgba(255, 255, 255, 0.4); }

      .card img {
         width: 100%;
         height: 220px;
         object-fit: contain;
         border-radius: 20px;
         margin-bottom: 15px;
         background: transparent;
      }

      .card h3 { color: #004d40; font-size: 20px; margin: 10px 0; }

      .price { font-size: 22px; font-weight: 700; color: #e91e63; margin-bottom: 20px; }

      .btn {
         background: #004d40;
         color: white;
         padding: 12px 20px;
         border-radius: 50px;
         border: none;
         font-weight: 600;
         cursor: pointer;
         transition: 0.3s;
         width: 100%;
         text-transform: uppercase;
      }

      .btn:hover { background: #002d25; letter-spacing: 1px; }
   </style>
</head>
<body>

   <div class="nav-container">
       <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> View Cart</a>
   </div>

   <h1 class="heading">✨ OUR BEAUTY COLLECTION ✨</h1>

   <div class="container">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `products`") or die('Query Failed');
         if(mysqli_num_rows($select) > 0){
            while($row = mysqli_fetch_assoc($select)){
      ?>
      <form action="" method="post" class="card">
         <img src="images/<?php echo $row['image']; ?>" alt="Product">
         <h3><?php echo $row['name']; ?></h3>
         <div class="price">₹<?php echo $row['price']; ?>/-</div>

         <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">

         <button type="submit" name="add_to_cart" class="btn">Add To Bag</button>
      </form>
      <?php
            }
         } else {
            echo "<p style='text-align:center; width:100%;'>No products found!</p>";
         }
      ?>
   </div>

</body>
</html>