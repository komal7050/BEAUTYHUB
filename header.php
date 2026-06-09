<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-dark: #004d40;
            --accent-gold: #d4af37;
            --text-gray: #444;
            --white: #ffffff;
        }

        body { margin: 0; font-family: 'Inter', sans-serif; }

        .main-header {
            background: var(--white);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: 900;
            color: var(--primary-dark);
            text-decoration: none;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-gray);
            font-weight: 600;
            transition: 0.3s;
            font-size: 14px;
            text-transform: uppercase;
        }

        .nav-links a:hover { color: var(--primary-dark); }

        .admin-btn {
            color: var(--accent-gold) !important;
            border-left: 1px solid #ddd;
            padding-left: 15px;
        }

        .header-icons {
            display: flex;
            gap: 20px;
            font-size: 18px;
            color: var(--primary-dark);
        }

        .header-icons i { cursor: pointer; transition: 0.3s; }
        .header-icons i:hover { transform: scale(1.2); }
    </style>
</head>
<body>

<header class="main-header">
    <a href="index.php" class="logo">BEAUTY HUB</a>

    <nav class="nav-links">
        <a href="index.php#makeup">Makeup</a>
        <a href="index.php#skincare">Skincare</a>
        
        <a href="Admin/Add_product.php" style="color: var(--primary-dark);">
            <i class="fa-solid fa-plus-circle"></i> Add Product
        </a>
        <a href="Admin/Admin.php" class="admin-btn">
            <i class="fa-solid fa-user-shield"></i> Admin
        </a>
    </nav>

    <div class="header-icons">
        <i class="fa-regular fa-user"></i>
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
</header>