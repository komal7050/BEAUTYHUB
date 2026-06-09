<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyHub | Mega Professional Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #004d40; 
            --accent: #d4af37;
            --dark: #000000;
            --bg-grey: #f8f8f8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #fff; color: #111; overflow-x: hidden; }

        /* --- 1. TOP ANNOUNCEMENT --- */
        .top-bar { background: var(--dark); color: #fff; text-align: center; padding: 12px; font-size: 12px; letter-spacing: 3px; font-weight: 600; }

        /* --- 2. STICKY HEADER --- */
        .header { position: sticky; top: 0; background: #fff; z-index: 5000; padding: 20px 8%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; }
        .logo { font-size: 35px; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 5px; }
        .nav-links { display: flex; gap: 40px; }
        .nav-links a { text-decoration: none; color: #000; font-weight: 700; text-transform: uppercase; font-size: 13px; }

        /* --- 3. MASSIVE HERO (NO GAP) --- */
        .hero { height: 90vh; background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2000') center/cover fixed; display: flex; align-items: center; justify-content: center; color: white; text-align: center; }
        .hero h1 { font-size: 100px; letter-spacing: 15px; font-weight: 300; }
        .hero b { font-weight: 900; color: var(--accent); }

        /* --- 4. BRAND STRIP (DARK & BOLD) --- */
        .brand-section { background: var(--dark); padding: 80px 8%; border-bottom: 10px solid var(--accent); }
        .brand-flex { display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; }
        .brand-flex img { height: 60px; filter: brightness(0) invert(1); opacity: 0.8; transition: 0.4s; }
        .brand-flex img:hover { filter: none; opacity: 1; transform: scale(1.1); }

        /* --- 5. INTERLOCKING CATEGORIES (NO GAP) --- */
        .cat-grid { display: flex; height: 600px; margin: 0; }
        .cat-box { flex: 1; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; text-decoration: none; }
        .cat-box img { width: 100%; height: 100%; object-fit: cover; transition: 0.8s; }
        .cat-box:hover img { transform: scale(1.1); }
        .cat-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; color: white; flex-direction: column; }
        .cat-overlay h3 { font-size: 35px; letter-spacing: 5px; text-transform: uppercase; }

        /* --- 6. BEST SELLERS (COMPACT GRID) --- */
        .products { padding: 100px 8%; background: #fff; }
        .section-title { text-align: center; font-size: 45px; font-weight: 900; margin-bottom: 60px; letter-spacing: 2px; }
        .p-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .p-card { border: 1px solid #eee; padding: 25px; text-align: center; transition: 0.4s; position: relative; }
        .p-card:hover { box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .p-card img { width: 100%; height: 320px; object-fit: contain; margin-bottom: 15px; }
        .btn-buy { width: 100%; padding: 15px; background: var(--dark); color: white; border: none; font-weight: 700; cursor: pointer; margin-top: 15px; }

        /* --- 7. LARGE VIDEO/STORY BANNER --- */
        .story-banner { display: flex; background: var(--bg-grey); min-height: 600px; align-items: center; }
        .story-content { flex: 1; padding: 8%; }
        .story-img { flex: 1; height: 600px; background: url('https://images.unsplash.com/photo-1596462502278-27bfdc4033c8?q=80&w=1000') center/cover; }

        /* --- 8. INSTAGRAM FEED SECTION --- */
        .insta-section { padding: 80px 0 0; text-align: center; }
        .insta-grid { display: flex; gap: 5px; margin-top: 40px; }
        .insta-item { flex: 1; height: 250px; background-size: cover; background-position: center; }

        /* --- 9. MEGA FOOTER --- */
        footer { background: var(--dark); color: #fff; padding: 100px 8% 40px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr; gap: 60px; }
        .footer-col h4 { color: var(--accent); margin-bottom: 25px; text-transform: uppercase; letter-spacing: 2px; }
        .footer-col li { list-style: none; margin-bottom: 12px; color: #666; font-size: 14px; }
    </style>
</head>
<body>

    <div class="top-bar">FLAT 50% OFF ON ALL INTERNATIONAL BRANDS | SHOP NOW</div>

 <header class="header">
    <a href="index.php" class="logo">BEAUTY HUB</a>
    
    <div class="nav-menu" style="display: flex; align-items: center; gap: 20px;">
        <a href="#makeup" style="text-decoration: none; color: #000; font-weight: 700; text-transform: uppercase; font-size: 13px;">Makeup</a>
        <a href="#skincare" style="text-decoration: none; color: #000; font-weight: 700; text-transform: uppercase; font-size: 13px;">Skincare</a>
        
        <a href="category.php" style="text-decoration: none; color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 13px;">
            Categories
        </a>

        <a href="product.php" style="text-decoration: none; color: #000; font-weight: 700; text-transform: uppercase; font-size: 13px;">
            Products
        </a>

        <a href="login.php" style="text-decoration: none; color: #004d40; font-weight: 700; text-transform: uppercase; font-size: 13px;">
             Login
        </a>
        <a href="signup.php" style="text-decoration: none; color: #004d40; font-weight: 700; text-transform: uppercase; font-size: 13px;">
             Signup
        </a>

        <div class="header-icons" style="display: flex; gap: 18px; font-size: 18px; align-items: center; border-left: 1px solid #eee; padding-left: 15px;">
            
            <a href="Admin/Add_product.php" title="Add Product" style="color: #004d40; text-decoration: none; font-size: 13px; font-weight: 700;">
                <i class="fa-solid fa-plus-circle"></i> ADD PRODUCT
            </a>

            <a href="cart.php" title="View Cart" style="color: inherit; text-decoration: none;">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <a href="checkout.php" title="Proceed to Checkout" style="color: #2c3e50; text-decoration: none; font-size: 13px; font-weight: 700; display: flex; align-items: center; gap: 4px;">
                <i class="fa-solid fa-bag-shopping"></i> CHECKOUT
            </a>

            <a href="Admin/Admin.php" title="Admin Dashboard" style="color: var(--accent); font-weight: 800; text-decoration: none; font-size: 13px; display: flex; align-items: center; gap: 5px;">
                <i class="fa-solid fa-user-shield"></i> ADMIN
            </a> 
        </div>
    </div>
</header>

    <section class="hero">
        <div>
            <h1>ELITE <b>GLOW</b></h1>
            <p style="letter-spacing: 8px; margin-top: 20px;">CURATED LUXURY SINCE 2026</p>
        </div>
    </section>

    <section class="brand-section" id="brands">
        <div class="brand-flex">
            <img src="images/lakme.png" alt="Lakme">
            <img src="images/maybelline.png" alt="Maybelline">
            <img src="images/mac.png" alt="MAC">
            <img src="images/loreal.png" alt="Loreal">
        </div>
    </section>

    <div class="cat-grid">
        <a href="#" class="cat-box">
            <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=800" alt="Face">
            <div class="cat-overlay"><h3>Face</h3></div>
        </a>
        <a href="#" class="cat-box">
            <img src="images/mascara.png" alt="Eyes" style="object-fit: contain; background: #f0f0f0;">
            <div class="cat-overlay"><h3>Eyes</h3></div>
        </a>
        <a href="#" class="cat-box">
            <img src="images/lip gloss.png" alt="Lips" style="object-fit: contain; background: #fff;">
            <div class="cat-overlay"><h3>Lips</h3></div>
        </a>
    </div>

    <section class="products" id="makeup">
        <h2 class="section-title">THE ICONIC COLLECTION</h2>
        <div class="p-grid">
            <div class="p-card">
                <img src="images/lipstick_red.jpg" alt="Lipstick">
                <h4>Matte Comfort</h4>
                <p style="color:#888;">Velvet Texture</p>
                <div style="margin-top:10px; font-weight:900; font-size:20px;">₹1,199</div>
                <button class="btn-buy">ADD TO BAG</button>
            </div>
            <div class="p-card">
                <img src="images/mascara.png" alt="Mascara">
                <h4>Drama Lash</h4>
                <p style="color:#888;">Volumizing Black</p>
                <div style="margin-top:10px; font-weight:900; font-size:20px;">₹850</div>
                <button class="btn-buy">ADD TO BAG</button>
            </div>
            <div class="p-card">
                <img src="images/lip gloss.png" alt="Lip Gloss">
                <h4>Crystal Shine</h4>
                <p style="color:#888;">Mirror Finish</p>
                <div style="margin-top:10px; font-weight:900; font-size:20px;">₹1,450</div>
                <button class="btn-buy">ADD TO BAG</button>
            </div>
            <div class="p-card">
                <img src="images/moisturizer.png" alt="Moisturizer">
                <h4>Hydra Glow</h4>
                <p style="color:#888;">24h Hydration</p>
                <div style="margin-top:10px; font-weight:900; font-size:20px;">₹1,800</div>
                <button class="btn-buy">ADD TO BAG</button>
            </div>
        </div>
    </section>

    <section class="story-banner" id="skincare">
        <div class="story-img" style="flex: 1.2; height: 600px; background: url('https://images.unsplash.com/photo-1556228578-0d85b1a4d571?q=80&w=1200') center/cover;"></div>
        
        <div class="story-content" style="flex: 1; padding: 0 8%;">
            <h2 style="font-size: 45px; color: #004d40; font-weight: 800;">THE SCIENCE <br> OF BEAUTY</h2>
            <p style="margin: 25px 0; font-size: 18px; color: #555;">Discover our dermatologist-tested skincare range that promises a radiant glow within 7 days.</p>
            <button style="padding: 15px 40px; border: 2px solid #004d40; background: transparent; font-weight: 800; cursor: pointer;">KNOW MORE</button>
        </div>
    </section>

    <section class="insta-section" style="padding: 60px 0; text-align: center;">
    <h3 style="letter-spacing: 2px; margin-bottom: 30px; font-weight: 800; text-transform: uppercase;">FOLLOW US @BEAUTYHUB</h3>
    
    <div class="insta-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; padding: 0 8%; align-items: stretch;">
        
        <div style="height: 400px; background: url('https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=500') center/cover;"></div>

        <div style="height: 400px; background: url('images/sunscreen.png') center/cover;"></div>

        <div style="background: #f9f9f9; height: 400px; display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid #eee; padding: 10px;">
            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=400" style="width: 90%; height: 240px; object-fit: contain; margin-bottom: 10px;">
            <h4 style="font-size: 16px; color: #004d40; font-weight: 700;">Night Repair</h4>
            <p style="font-weight: 800; margin: 5px 0;">₹2,300</p>
            <button style="background: #000; color: #fff; padding: 10px; border: none; cursor: pointer; font-size: 13px; width: 100%; font-weight: 700;">ADD TO BAG</button>
        </div>

        <div style="background: #f9f9f9; height: 400px; display: flex; flex-direction: column; align-items: center; justify-content: center; border: 1px solid #eee; padding: 10px;">
            <div style="width: 100%; height: 240px; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 10px;">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=500" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <h4 style="font-size: 16px; color: #004d40; font-weight: 700;">Beauty Kit</h4>
            <p style="font-weight: 800; margin: 5px 0;">₹1,800</p>
            <button style="background: #000; color: #fff; padding: 10px; border: none; cursor: pointer; font-size: 13px; width: 100%; font-weight: 700;">ADD TO BAG</button>
        </div>

    </div>
</section>

    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h3 class="logo" style="color: white; margin-bottom: 20px;">BEAUTY HUB</h3>
                <p style="color:#555;">Authentic luxury products delivered to your doorstep since 2026.</p>
            </div>
            <div class="footer-col">
                <h4>Help</h4>
                <li>Contact Us</li>
                <li>Shipping</li>
                <li>Returns</li>
            </div>
            <div class="footer-col">
                <h4>Shop</h4>
                <li>Makeup</li>
                <li>Skincare</li>
                <li>Fragrance</li>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <input type="email" placeholder="Your Email" style="padding:12px; border:none; width:100%; background:#111; color:white; margin-bottom:10px;">
                <button style="width:100%; padding:12px; background:var(--accent); color:white; border:none; font-weight:800;">JOIN</button>
            </div>
        </div>
    </footer>

</body>
</html>