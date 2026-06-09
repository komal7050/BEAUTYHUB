<?php
include '../config.php'; // Database connection zaroori hai

// Delete logic (optional but good to have)
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   header('location:Manage_products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products | BeautyHub Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* ... (Aapki CSS same rahegi) ... */
        :root { --primary: #004d40; --accent: #d4af37; --bg: #f4f7f6; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background: var(--bg); display: flex; }
        .sidebar { width: 260px; height: 100vh; background: var(--primary); color: white; padding: 30px 20px; position: fixed; }
        .sidebar h2 { font-size: 22px; letter-spacing: 3px; margin-bottom: 40px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 20px; }
        .nav-item { display: flex; align-items: center; gap: 15px; padding: 15px; color: #bdc3c7; text-decoration: none; transition: 0.3s; border-radius: 8px; margin-bottom: 10px; }
        .nav-item:hover, .nav-item.active { background: rgba(255,255,255,0.1); color: var(--accent); }
        .main-content { margin-left: 260px; width: 100%; padding: 40px; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .page-header h1 { font-size: 26px; font-weight: 800; color: #333; }
        .add-new-btn { background: var(--primary); color: white; padding: 12px 20px; text-decoration: none; font-weight: 700; border-radius: 5px; font-size: 14px; }
        .table-container { background: white; padding: 20px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { text-align: left; padding: 15px; background: #f9f9f9; color: #666; font-size: 13px; text-transform: uppercase; }
        td { padding: 15px; border-bottom: 1px solid #eee; vertical-align: middle; }
        .prod-img { width: 50px; height: 50px; object-fit: cover; border-radius: 4px; background: #f4f4f4; }
        .prod-name { font-weight: 700; color: #333; }
        .category-badge { background: #e0f2f1; color: var(--primary); padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 700; }
        .actions { display: flex; gap: 10px; }
        .btn-action { width: 35px; height: 35px; display: flex; align-items: center; justify-content: center; border-radius: 4px; text-decoration: none; font-size: 14px; transition: 0.3s; }
        .edit { background: #e3f2fd; color: #1976d2; }
        .delete { background: #ffebee; color: #c62828; }
        .btn-action:hover { transform: scale(1.1); }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>BEAUTY HUB</h2>
        <a href="Admin.php" class="nav-item"><i class="fa-solid fa-gauge"></i> Dashboard</a>
        <a href="Add_product.php" class="nav-item"><i class="fa-solid fa-plus-circle"></i> Add Product</a>
        <a href="Manage_products.php" class="nav-item active"><i class="fa-solid fa-boxes-stacked"></i> Manage Products</a>
        <a href="#" class="nav-item"><i class="fa-solid fa-cart-shopping"></i> Orders</a>
        <a href="../index.php" class="nav-item" style="margin-top: 50px; border-top: 1px solid rgba(255,255,255,0.1);"><i class="fa-solid fa-house"></i> View Website</a>
    </div>

    <div class="main-content">
        <div class="page-header">
            <h1>All Products Inventory</h1>
            <a href="Add_product.php" class="add-new-btn">+ ADD NEW PRODUCT</a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database se saare products le kar aao
                    $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                    if(mysqli_num_rows($select_products) > 0){
                        while($row = mysqli_fetch_assoc($select_products)){
                    ?>
                    <tr>
                        <td><img src="../images/<?php echo $row['image']; ?>" class="prod-img" onerror="this.src='../images/placeholder.png';"></td>
                        
                        <td><span class="prod-name"><?php echo $row['name']; ?></span></td>
                        <td><span class="category-badge"><?php echo isset($row['category']) ? $row['category'] : 'General'; ?></span></td>
                        <td>₹<?php echo number_format($row['price']); ?></td>
                        <td><?php echo isset($row['stock']) ? $row['stock'] : 'In Stock'; ?></td>
                        <td class="actions">
                            <a href="update_product.php?update=<?php echo $row['id']; ?>" class="btn-action edit" title="Edit"><i class="fa-solid fa-pen"></i></a>
                            <a href="Manage_products.php?delete=<?php echo $row['id']; ?>" class="btn-action delete" title="Delete" onclick="return confirm('Delete this product?');"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' style='text-align:center;'>No products found!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>