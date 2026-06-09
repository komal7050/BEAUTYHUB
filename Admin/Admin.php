<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | BeautyHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #004d40;
            --accent: #d4af37;
            --white: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Dashboard Header */
        .dashboard-header {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            letter-spacing: 2px;
        }

        .container {
            max-width: 1000px;
            width: 90%;
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        /* Glassmorphism Cards */
        .admin-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: 0.4s ease;
            text-decoration: none;
            color: #333;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .admin-card:hover {
            transform: translateY(-10px);
            background: var(--white);
            box-shadow: 0 15px 40px rgba(0,77,64,0.2);
            border-color: var(--primary);
        }

        .admin-card i {
            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .admin-card h3 {
            margin: 10px 0;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 1px;
        }

        .admin-card p {
            font-size: 14px;
            color: #666;
        }

        .back-btn {
            margin-top: 40px;
            padding: 12px 30px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-btn:hover { background: #000; }
    </style>
</head>
<body>

    <div class="dashboard-header">
        <h1><i class="fa-solid fa-gauge-high"></i> BEAUTYHUB ADMIN PANEL</h1>
    </div>

    <div class="container">
        <a href="Add_product.php" class="admin-card">
            <i class="fa-solid fa-folder-plus"></i>
            <h3>Add Products</h3>
            <p>Naye cosmetics aur skincare items store mein jodein.</p>
        </a>

        <a href="Manage_products.php" class="admin-card">
            <i class="fa-solid fa-boxes-stacked"></i>
            <h3>Manage Stock</h3>
            <p>Puraane products ko edit ya delete karein.</p>
        </a>

        <a href="placed_orders.php" class="admin-card">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <h3>View Orders</h3>
            <p>Check karein kitne customers ne order kiya hai.</p>
        </a>
    </div>

    <a href="../index.php" class="back-btn"><i class="fa-solid fa-house"></i> Back to Storefront</a>

</body>
</html>