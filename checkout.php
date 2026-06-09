<?php
include 'config.php';

if(isset($_POST['order_btn'])){

   // Form se data nikalna
   $name = mysqli_real_escape_string($conn, $_POST['first_name'] . ' ' . $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['pay']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $placed_on = date('d-M-Y');

   $cart_total = 0;
   $cart_products[] = '';

   // Cart se saara samaan uthana
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
   if(mysqli_num_rows($cart_query) > 0){
      while($cart_item = mysqli_fetch_assoc($cart_query)){
         $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
         $sub_total = ($cart_item['price'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      }
   }

   $total_products = implode(', ', $cart_products);

   // --- MAIN PART: Data Database mein bhejna ---
   if($cart_total > 0){
      $insert_order = mysqli_query($conn, "INSERT INTO `orders`(name, email, method, address, total_products, total_price, placed_on) VALUES('$name', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');

      if($insert_order){
         // Order hone ke baad cart khali karna
         mysqli_query($conn, "DELETE FROM `cart`") or die('query failed');
         echo '<script>alert("Order placed successfully!"); window.location.href="product.php";</script>';
      }
   } else {
      echo '<script>alert("Your cart is empty!");</script>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout | BeautyHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #004d40; --accent: #d4af37; --grey: #f4f4f4; --text: #333; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: #fff; color: var(--text); }
        .checkout-nav { padding: 20px 8%; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; }
        .logo-small { font-size: 24px; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 3px; }
        .checkout-container { max-width: 1200px; margin: 40px auto; display: grid; grid-template-columns: 1.5fr 1fr; gap: 50px; padding: 0 20px; }
        .checkout-form h2 { font-size: 22px; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 1px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 600; color: #666; }
        .form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; outline: none; }
        .row { display: flex; gap: 15px; } .row .form-group { flex: 1; }
        .payment-methods { margin-top: 40px; padding: 25px; background: var(--grey); border-radius: 8px; }
        .method { display: flex; align-items: center; gap: 15px; margin-bottom: 15px; padding: 15px; background: white; border: 1px solid #eee; cursor: pointer; }
        .order-box { background: #fff; border: 1px solid #eee; padding: 30px; height: fit-content; position: sticky; top: 100px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 12px; }
        .order-box h3 { border-bottom: 2px solid var(--accent); display: inline-block; padding-bottom: 5px; margin-bottom: 20px; color: var(--primary); }
        .summary-item { display: flex; justify-content: space-between; margin-bottom: 15px; font-size: 15px; }
        .total-price { border-top: 1px solid #eee; padding-top: 20px; margin-top: 20px; font-size: 24px; font-weight: 900; color: var(--primary); }
        .btn-order { width: 100%; padding: 20px; background: var(--primary); color: white; border: none; font-weight: 800; letter-spacing: 2px; margin-top: 30px; cursor: pointer; transition: 0.4s; border-radius: 8px; font-size: 16px; }
        .btn-order:hover { background: #000; transform: translateY(-3px); }
    </style>
</head>
<body>

    <nav class="checkout-nav">
        <a href="product.php" class="logo-small">BEAUTY HUB</a>
        <div><i class="fa-solid fa-lock"></i> SECURE CHECKOUT</div>
    </nav>

    <form action="" method="post">
        <div class="checkout-container">
            <div class="checkout-form">
                <h2>Shipping Address</h2>
                <div class="row">
                    <div class="form-group"><label>First Name</label><input type="text" name="first_name" required></div>
                    <div class="form-group"><label>Last Name</label><input type="text" name="last_name" required></div>
                </div>
                <div class="form-group"><label>Email Address</label><input type="email" name="email" required></div>
                <div class="form-group"><label>Street Address</label><input type="text" name="address" required></div>
                
                <div class="payment-methods">
                    <h2>Payment Method</h2>
                    <label class="method"><input type="radio" name="pay" value="COD" checked><span>Cash on Delivery</span></label>
                    <label class="method"><input type="radio" name="pay" value="Online"><span>Online Payment</span></label>
                </div>
            </div>

            <div class="order-box">
                <h3>Your Order</h3>
                <?php
                $grand_total = 0;
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                        $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
                        $grand_total += $total_price;
                ?>
                <div class="summary-item">
                    <p><?php echo $fetch_cart['name']; ?> (x<?php echo $fetch_cart['quantity']; ?>)</p>
                    <span>₹<?php echo number_format($total_price); ?></span>
                </div>
                <?php } } ?>
                
                <div class="total-price summary-item">
                    <p>Total</p>
                    <span>₹<?php echo number_format($grand_total); ?></span>
                </div>

                <input type="submit" name="order_btn" value="PLACE ORDER NOW" class="btn-order">
            </div>
        </div>
    </form>
</body>
</html>