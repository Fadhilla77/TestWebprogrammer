<!-- app/Views/products/create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS Web App - Add Product</title>
    <style>
        body {
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #ff0000; /* Red background color */
            height: 100vh;
            width: 250px; /* Adjust the width as needed */
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #ff0000; /* Red background color */
        }

        .logo {
            width: 30px; /* Adjust the width as needed */
            height: 30px; /* Adjust the height as needed */
            margin-right: 10px;
        }

        .sidebar-header h3 {
            color: #fff;
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px;
        }

        li a {
            text-decoration: none;
            color: #fff;
        }

        .active {
            background-color: #fff; /* White background color for the selected item */
            color: #ff0000; /* Red text color for the selected item */
        }

        #content {
            flex: 1;
            padding: 20px;
        }

        .form-container {
            width: 50%; /* Adjust as needed */
            margin: auto;
        }

        .form-container form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="file"] {
            display: none;
        }

        .image-upload-container {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .image-placeholder {
            width: 100%;
            height: 150px;
            border: 2px dashed #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .image-placeholder img {
            max-width: 80%;
            max-height: 80%;
            opacity: 0.5;
        }

        .image-buttons {
            display: flex;
            justify-content: space-between;
        }
        .sidebar-header h3 {
        color: #fff;
        margin: 0;
    }
        nav ul li a {
        color: #fff; /* Default text color */
    }

    nav ul li.active a,
    nav ul li:hover a {
        background-color: #fff; /* Background color when selected or hovered */
        color: #000; /* Text color when selected or hovered */
        font-weight: bold; /* Make the text bold for the selected item */
    }
    button[type="submit"] {
            background-color: blue;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            border: none;
        }

    </style>
</head>
<body>

<nav>
    <!-- Navigation menu (sidebar) -->
    <div class="sidebar-header">
        <img src="/public//images//bag.png" alt="Logo" class="logo">
        <h3>SIMS Web App</h3>
    </div>
    <ul>
    <li class="active"><a href="<?= base_url('products'); ?>">Products</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="/auth/logout">Logout</a></li>
    </ul>
</nav>

<div id="content">
    <!-- Content area -->

    <!-- Add Product Form -->
    <div class="form-container">
        <form action="<?= site_url('products/store'); ?>" method="post" enctype="multipart/form-data">
            <label for="name">Nama Produk:</label>
            <input type="text" id="name" name="name" required>

            <label for="category">Kategori Produk:</label>
            <select id="category" name="category" required>
                <option value="Alat Olahraga">Alat Olahraga</option>
                <option value="Alat Musik">Alat Musik</option>
                <!-- Add more options as needed -->
            </select>

            <label for="purchase_price">Harga Beli(Rp):</label>
            <input type="text" id="purchase_price" name="purchase_price" required>

            <label for="selling_price">Harga Jual(Rp):</label>
            <input type="text" id="selling_price" name="selling_price" required>

            <label for="stock_quantity">Stok Produk:</label>
            <input type="text" id="stock_quantity" name="stock_quantity" required>

            <div class="image-upload-container">
                <label for="image">Upload Gambar:</label>
                <div class="image-placeholder">
                <img src="/public//images//Image.png" alt="Upload Gambar Disini">
                </div>
                <input type="file" id="image" name="image" required>
                <div class="image-buttons">
                    <button type="button" onclick="cancelUpload()">Batalkan</button>
                    <button type="submit">Simpan</button>
                </div>
            </div>

        </form>
    </div>

</div>

<script>
    function cancelUpload() {
        // Reset the file input and hide the image placeholder
        document.getElementById('image').value = '';
        document.querySelector('.image-placeholder').style.display = 'none';
    }
</script>

</body>
</html>

