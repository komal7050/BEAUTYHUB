<style>
        .main-footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 60px 5% 20px;
            margin-top: 50px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            border-bottom: 1px solid #333;
            padding-bottom: 40px;
        }

        .footer-box h3 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-box ul { list-style: none; padding: 0; }
        .footer-box ul li { margin-bottom: 10px; }
        
        .footer-box ul li a {
            color: #999;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-box ul li a:hover { color: var(--accent-gold); padding-left: 5px; }

        .social-icons { display: flex; gap: 15px; font-size: 20px; margin-top: 15px; }
        .social-icons i { cursor: pointer; transition: 0.3s; }
        .social-icons i:hover { color: #fff; }

        .copyright {
            text-align: center;
            padding-top: 20px;
            font-size: 13px;
            color: #666;
        }
    </style>

    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-box">
                <h3>BEAUTY HUB</h3>
                <p>Aapki sundarta hamari zimmedari. Best cosmetics at best prices.</p>
                <div class="social-icons">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>

            <div class="footer-box">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="Admin/Admin.php">Admin Dashboard</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Customer Care</h3>
                <ul>
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            &copy; 2026 Beauty Hub Store | Designed with <i class="fa-solid fa-heart" style="color:red;"></i>
        </div>
    </footer>

</body>
</html>