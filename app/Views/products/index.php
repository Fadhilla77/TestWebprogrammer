<!-- app/Views/products/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS Web App - Dashboard</title>
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

        #content form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-container {
            display: flex;
            justify-content: right;
            margin-bottom: 20px;
        }

        .form-container form {
            width: 35%; /* Adjust as needed */
        }

        .search-bar {
            margin-bottom: 10px;
        }

        .category-bar {
            margin-bottom: 10px;
        }
        .sidebar-header {
        display: flex;
        align-items: center;
        padding: 10px;
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
        nav ul li a {
        color: #fff; /* Default text color */
    }

    nav ul li.active a,
    nav ul li:hover a {
        background-color: #fff; /* Background color when selected or hovered */
        color: #000; /* Text color when selected or hovered */
        font-weight: bold; /* Make the text bold for the selected item */
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
        <li class="active"><a href="#">Products</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="/auth/logout">Logout</a></li>
    </ul>
</nav>

<div id="content">
    <!-- Content area -->

    <!-- Search Bar -->
    <div class="search-bar">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search">
        <button type="button">Search</button>
    </div>

    <!-- Category Bar -->
    <div class="category-bar">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="all">All Categories</option>
            <option value="category1">Alat Olahraga</option>
            <option value="category2">Alat Musik</option>
            <!-- Add more categories as needed -->
        </select>
    </div>

    <!-- Product CRUD Form -->
    <div class="form-container">
    <form action="<?= base_url('products/create'); ?>" method="GET">
        <input type="submit" value="Add Product">
    </form>

        <form action="/export.php" method="POST">
            <input type="submit" value="Export to Excel">
        </form>
    </div>

    <!-- Product Table with Pagination and Search -->
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Image</th>
                <th>Nama Produk</th>
                <th>Ketegori Produk</th>
                <th>Harga Beli(Rp)</th>
                <th>Harga Jual(Rp)</th>
                <th>Stok Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through database results and display rows -->
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id']; ?></td>
                    <td><img src="<?= base_url('writable/uploads/' . $product['image']); ?>" alt="Product Image" style="width: 50px;"></td>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['category']; ?></td>
                    <td><?= $product['purchase_price']; ?></td>
                    <td><?= $product['selling_price']; ?></td>
                    <td><?= $product['stock_quantity']; ?></td>
                    <td>
                        <!-- Add edit and delete buttons with appropriate links or form actions -->
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Pagination links -->

</div>

</body>
</html>