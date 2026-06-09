<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | BeautyHub Professional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #004d40; 
            --accent: #d4af37;
            --dark: #111;
            --bg-light: #f4f4f4;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }

        body { background-color: var(--bg-light); }

        /* --- Page Layout --- */
        .category-container {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 30px;
            padding: 40px 5%;
            margin-top: 20px;
        }

        /* --- Sidebar --- */
        .sidebar {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .filter-section { margin-bottom: 35px; }
        .filter-section h4 { 
            font-size: 14px; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            margin-bottom: 20px; 
            border-bottom: 2px solid var(--accent);
            display: inline-block;
            color: var(--primary);
        }

        .filter-list { list-style: none; }
        .filter-list li { margin-bottom: 12px; font-size: 15px; color: #555; cursor: pointer; display: flex; align-items: center; }
        .filter-list li:hover { color: var(--primary); font-weight: 600; }
        .filter-list li input { margin-right: 10px; accent-color: var(--primary); }

        /* --- Right Side Content --- */
        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 15px;
        }

        .category-header h2 { font-size: 24px; font-weight: 900; text-transform: uppercase; color: var(--primary); }

        .sort-select { padding: 10px; border: 1px solid #ddd; border-radius: 5px; outline: none; }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }

        /* --- Product Card --- */
        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            transition: 0.4s;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .product-card:hover { transform: translateY(-10px); box-shadow: 0 15px 35px rgba(0,0,0,0.1); }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            margin-bottom: 15px;
            mix-blend-mode: multiply; /* Helps blend white background images */
        }

        .product-card h3 { font-size: 17px; font-weight: 700; color: var(--dark); margin-bottom: 5px; }
        .product-card p { color: #888; font-size: 13px; margin-bottom: 10px; }
        .product-card .price { font-size: 20px; font-weight: 900; color: #e91e63; }

        .btn-view {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            margin-top: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-view:hover { background: var(--dark); letter-spacing: 1px; }

        @media (max-width: 900px) {
            .category-container { grid-template-columns: 1fr; }
            .sidebar { display: none; }
        }
    </style>
</head>
<body>

    <div class="category-container">
        
        <aside class="sidebar">
            <div class="filter-section">
                <h4>Categories</h4>
                <ul class="filter-list">
                    <li><input type="checkbox"> Makeup Essentials</li>
                    <li><input type="checkbox"> Premium Skincare</li>
                    <li><input type="checkbox"> Luxury Fragrance</li>
                    <li><input type="checkbox"> Hair Care</li>
                </ul>
            </div>

            <div class="filter-section">
                <h4>Price Range</h4>
                <ul class="filter-list">
                    <li><input type="radio" name="price"> Under ₹500</li>
                    <li><input type="radio" name="price"> ₹500 - ₹2000</li>
                    <li><input type="radio" name="price"> Above ₹2000</li>
                </ul>
            </div>
        </aside>

        <main class="content">
            <div class="category-header">
                <h2>✨ All Products ✨</h2>
                <select class="sort-select">
                    <option>Sort by: Newest</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
            </div>

            <div class="product-grid">
                
                <div class="product-card">
                    <img src="images/lipstick_red.jpg" alt="Lipstick">
                    <h3>Matte Lipstick</h3>
                    <p>Long-lasting Velvet Finish</p>
                    <div class="price">₹1,199</div>
                    <button class="btn-view">VIEW PRODUCT</button>
                </div>

                <div class="product-card">
                    <img src="images/mascara.png" alt="Mascara">
                    <h3>Drama Lash Mascara</h3>
                    <p>Volumizing Intense Black</p>
                    <div class="price">₹850</div>
                    <button class="btn-view">VIEW PRODUCT</button>
                </div>

                <div class="product-card">
                    <img src="images/sunscreen.png" alt="Sunscreen">
                    <h3>Aqua Sunscreen</h3>
                    <p>SPF 50+ Protection</p>
                    <div class="price">₹650</div>
                    <button class="btn-view">VIEW PRODUCT</button>
                </div>

                <div class="product-card">
                    <img src="images/lip gloss.png" alt="Lip Gloss">
                    <h3>Crystal Lip Gloss</h3>
                    <p>High-Shine Mirror Effect</p>
                    <div class="price">₹1,450</div>
                    <button class="btn-view">VIEW PRODUCT</button>
                </div>