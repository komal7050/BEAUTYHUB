<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyHub | Login</title>
    <style>
        :root { --primary: #004d40; --accent: #d4af37; }
        body { 
            font-family: 'Inter', sans-serif; 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2000') center/cover fixed;
            height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0;
        }
        .login-box { 
            background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); 
            padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2); 
            width: 350px; text-align: center; color: white; box-shadow: 0 15px 35px rgba(0,0,0,0.5);
        }
        h2 { letter-spacing: 2px; margin-bottom: 30px; text-transform: uppercase; }
        h2 b { color: var(--accent); }
        .input-field { width: 100%; padding: 12px; margin: 10px 0; border-radius: 5px; border: none; outline: none; box-sizing: border-box; background: rgba(255,255,255,0.9); }
        .btn-submit { width: 100%; padding: 12px; background: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        .btn-submit:hover { background: var(--accent); color: black; }
        a { color: var(--accent); text-decoration: none; font-size: 14px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>LOGIN <b>HUB</b></h2>
        <form action="login_logic.php" method="POST">
            <input type="email" name="email" class="input-field" placeholder="Email Address" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <button type="submit" class="btn-submit">LOG IN</button>
        </form>
        <p style="margin-top:20px; font-size:14px; color: #ccc;">New User? <a href="signup.php">Create Account</a></p>
    </div>
</body>
</html>