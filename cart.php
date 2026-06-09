<?php
include 'config.php'; 

// 1. Quantity Update karne ka logic
if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   echo '<script>alert("Quantity updated!"); window.location.href="cart.php";</script>';
} 

// 2. Item remove karne ka logic
if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Bag | BeautyHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #004d40;
            --accent: #d4af37;
            --light-bg: #f9f9f9;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: #fff; color: #111; padding-top: 50px; }

        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            padding: 20px;
        }

        .cart-header {
            grid-column: 1 / -1;
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .cart-header h1 {
            font-size: 32px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 900;
        }

        .cart-items { display: flex; flex-direction: column; gap: 20px; }

        .item-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            border: 1px solid #eee;
            position: relative;
            border-radius: 8px;
        }

        .item-card img {
            width: 120px;
            height: 150px;
            object-fit: contain;
            background: var(--light-bg);
        }

        .item-details { flex: 2; }
        .item-details h3 { font-size: 18px; margin-bottom: 10px; text-transform: uppercase; }

        .update-form {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .qty-input {
            width: 60px;
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
        }

        .update-btn {
            background: none;
            border: 1px solid var(--primary);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            transition: 0.3s;
        }

        .update-btn:hover {
            background: var(--primary);
            color: white;
        }

        .item-price {
            font-size: 20px;
            font-weight: 900;
            color: var(--primary);
        }

        .remove-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ff4444;
            cursor: pointer;
            font-size: 20px;
            text-decoration: none;
        }

        .order-summary {
            background: var(--light-bg);
            padding: 30px;
            height: fit-content;
            border-top: 5px solid var(--primary);
            border-radius: 8px;
        }

        .summary-title { font-size: 20px; font-weight: 800; margin-bottom: 25px; text-transform: uppercase; }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .total-row {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
            font-weight: 900;
            font-size: 22px;
            color: #000;
        }

        .checkout-btn {
            width: 100%;
            padding: 18px;
            background: var(--primary);
            color: white;
            border: none;
            margin-top: 30px;
            font-weight: 800;
            letter-spacing: 2px;
            cursor: pointer;
            text-align: center;
            display: block;
            text-decoration: none;
            border-radius: 4px;
        }

        .continue-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #555;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="cart-container">
        <div class="cart-header">
            <h1>Your Shopping Bag</h1>
        </div>

        <div class="cart-items">
            <?php
            $grand_total = 0;
            $cart_query = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
            if(mysqli_num_rows($cart_query) > 0){
                while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                    $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
                    $grand_total += $sub_total;
            ?>
            <div class="item-card">
                <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="fa-solid fa-xmark remove-btn" onclick="return confirm('Remove this?');"></a>
                
                <img src="images/<?php echo $fetch_cart['image']; ?>" alt="Product">
                
                <div class="item-details">
                    <h3><?php echo $fetch_cart['name']; ?></h3>
                    
                    <form action="" method="post" class="update-form">
                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                        <label style="font-size: 13px;">Quantity:</label>
                        <input type="number" name="cart_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>" class="qty-input">
                        <button type="submit" name="update_cart" class="update-btn">UPDATE</button>
                    </form>
                </div>

                <div class="item-price">₹<?php echo number_format($fetch_cart['price']); ?></div>
            </div>
            <?php
                }
            } else {
                echo "<div style='grid-column: 1/-1; text-align:center; padding: 50px;'>
                        <i class='fa-solid fa-bag-shopping' style='font-size: 50px; color: #ddd; margin-bottom: 20px;'></i>
                        <p>Your cart is empty!</p>
                        <a href='product.php' class='continue-link' style='color: var(--primary); font-weight: bold;'>Go Shopping</a>
                      </div>";
            }
            ?>
        </div>

        <?php if($grand_total > 0){ ?>
        <div class="order-summary">
            <h2 class="summary-title">Order Summary</h2>
            
            <div class="summary-row">
                <span>Subtotal</span>
                <span>₹<?php echo number_format($grand_total); ?></span>
            </div>
            
            <div class="summary-row">
                <span>Shipping</span>
                <span style="color: green; font-weight: 600;">FREE</span>
            </div>

            <div class="summary-row total-row">
                <span>Total</span>
                <span>₹<?php echo number_format($grand_total); ?></span>
            </div>

            <a href="checkout.php" class="checkout-btn">PROCEED TO CHECKOUT</a>
            <a href="product.php" class="continue-link">← Continue Shopping</a>
        </div>
        <?php } ?>
    </div>

</body>
</html>