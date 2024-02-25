<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - SIMS Web App</title>
    <!-- Add your styles or include external stylesheets here -->
</head>
<body>

<div class="form-container">
    <form action="<?= base_url('products/store'); ?>" method="POST" enctype="multipart/form-data">
        <!-- Your form fields here (e.g., product name, category dropdown, price, etc.) -->
        <label for="name">Nama Produk:</label>
        <input type="text" id="name" name="name" required>

        <label for="category">Kategori Produk:</label>
        <input type="text" id="category" name="category" required>

        <label for="purchase_price">Harga Beli(Rp):</label>
        <input type="text" id="purchase_price" name="purchase_price" required>

        <label for="selling_price">Harga Jual(Rp):</label>
        <input type="text" id="selling_price" name="selling_price" required>

        <label for="stock_quantity">Stok Produk:</label>
        <input type="text" id="stock_quantity" name="stock_quantity" required>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required>

        <input type="submit" value="Add Product">
    </form>
</div>

</body>
</html>