<?php
include '../config.php'; // Database connection

// Order status update karne ka logic (optional)
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:placed_orders.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders | BeautyHub Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #004d40; --accent: #d4af37; --bg: #f4f7f6; }
        body { font-family: 'Inter', sans-serif; background: var(--bg); margin: 0; padding: 20px; }
        
        .header { text-align: center; margin-bottom: 30px; color: var(--primary); }
        .header h1 { font-weight: 800; letter-spacing: 1px; }

        .orders-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }

        .order-box {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-left: 5px solid var(--primary);
            position: relative;
        }

        .order-box p { margin: 8px 0; font-size: 14px; color: #444; }
        .order-box span { font-weight: 700; color: #111; }
        
        .total-price { font-size: 18px; color: var(--primary); font-weight: 900; border-top: 1px solid #eee; padding-top: 10px; margin-top: 10px; }
        
        .delete-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ff4444;
            text-decoration: none;
            font-size: 18px;
        }

        .back-link { display: block; text-align: center; margin-top: 30px; color: var(--primary); text-decoration: none; font-weight: 700; }
    </style>
</head>
<body>

    <div class="header">
        <h1><i class="fa-solid fa-receipt"></i> CUSTOMER ORDERS</h1>
    </div>

    <div class="orders-container">
        <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
        if(mysqli_num_rows($select_orders) > 0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
        ?>
        <div class="order-box">
            <a href="placed_orders.php?delete=<?php echo $fetch_orders['id']; ?>" class="fa-solid fa-trash delete-btn" onclick="return confirm('Delete this order?');"></a>
            
            <p> User Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
            <p> Number : <span><?php echo $fetch_orders['number']; ?></span> </p>
            <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
            <p> Address : <span><?php echo $fetch_orders['address']; ?></span> </p>
            <p> Payment Method : <span><?php echo $fetch_orders['method']; ?></span> </p>
            <p> Total Products : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
            <div class="total-price"> Total Bill : <span>₹<?php echo number_format($fetch_orders['total_price']); ?>/-</span> </div>
        </div>
        <?php
            }
        } else {
            echo '<p style="text-align:center; width:100%; grid-column: 1/-1;">No orders placed yet!</p>';
        }
        ?>
    </div>

    <a href="Admin.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> Back to Dashboard</a>

</body>
</html>