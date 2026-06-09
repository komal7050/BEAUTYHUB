<?php
include '../config.php'; // Database connection

// --- BACKEND LOGIC SHURU ---
if(isset($_POST['add_product'])){ 

   $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
   $p_price = $_POST['p_price'];
   
   // Image handling
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = '../images/'.$p_image;

   // Database Query
   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')");

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      echo "<script>alert('Product added successfully!'); window.location.href='Add_product.php';</script>";
   }else{
      echo "<script>alert('Error: Data save nahi hua');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | BeautyHub Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex; justify-content: center; align-items: center;
            min-height: 100vh; margin: 0;
        }
        .admin-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px; border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            width: 450px; text-align: center;
        }
        .form-group { text-align: left; margin-bottom: 15px; }
        label { font-weight: bold; display: block; margin-bottom: 5px; color: #004d40; }
        input, select {
            width: 100%; padding: 12px; border: 1px solid #ddd;
            border-radius: 8px; box-sizing: border-box;
        }
        .btn-submit {
            width: 100%; padding: 18px; background: #004d40; color: white; 
            border: none; border-radius: 10px; font-size: 18px; font-weight: 800; 
            cursor: pointer; margin-top: 20px; text-transform: uppercase;
            letter-spacing: 1px; box-shadow: 0 5px 15px rgba(0,77,64,0.3); transition: 0.3s;
        }
        .btn-submit:hover {
            background: #002d25; transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,77,64,0.4);
        }
        .preview-box {
            width: 100%; height: 120px; border: 2px dashed #ccc;
            margin-top: 10px; display: flex; align-items: center; justify-content: center;
            overflow: hidden;
        }
        #previewImg { max-height: 100%; display: none; }
    </style>
</head>
<body>

<div class="admin-card">
    <h2 style="color: #004d40; margin-bottom: 25px;">ADD NEW PRODUCT</h2>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="p_name" placeholder="Enter name..." required>
        </div>

        <div class="form-group">
            <label>Price (₹)</label>
            <input type="number" name="p_price" placeholder="1500" required>
        </div>

        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="p_image" id="imgInput" onchange="previewImage()" required>
            <div class="preview-box">
                <span id="text">Image Preview</span>
                <img src="" id="previewImg">
            </div>
        </div>

        <button type="submit" name="add_product" class="btn-submit">
            <i class="fa-solid fa-cloud-arrow-up"></i> UPLOAD TO STORE
        </button>
    </form>
</div>

<script>
    function previewImage() {
        const file = document.getElementById('imgInput').files[0];
        const previewImg = document.getElementById('previewImg');
        const text = document.getElementById('text');
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.style.display = 'block';
                text.style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    }
</script>

</body>
</html>