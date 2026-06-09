<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BeautyHub | Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #004d40; --accent: #d4af37; --dark: #000; }
        body { 
            font-family: 'Inter', sans-serif; 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=2000') center/cover no-repeat;
            height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0;
        }
        .form-box { 
            background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); 
            padding: 40px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2); 
            width: 350px; text-align: center; color: white;
        }
        .form-box h2 { letter-spacing: 3px; margin-bottom: 30px; }
        .form-box b { color: var(--accent); }
        .input-field { width: 100%; padding: 12px; margin: 10px 0; border-radius: 5px; border: none; outline: none; box-sizing: border-box; }
        .btn-submit { 
            width: 100%; padding: 12px; background: var(--primary); color: white; 
            border: none; border-radius: 5px; font-weight: bold; cursor: pointer; margin-top: 20px;
        }
        .btn-submit:hover { background: var(--accent); color: black; }
        .switch { margin-top: 15px; font-size: 13px; }
        .switch a { color: var(--accent); text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>JOIN <b>HUB</b></h2>
        <form action="signup_logic.php" method="POST">
            <input type="text" name="username" class="input-field" placeholder="Full Name" required>
            <input type="email" name="email" class="input-field" placeholder="Email Address" required>
            <input type="password" name="password" class="input-field" placeholder="Create Password" required>
            <button type="submit" class="btn-submit">SIGN UP</button>
        </form>
        <div class="switch">Already a member? <a href="login.php">Login</a></div>
    </div>
</body>
</html>