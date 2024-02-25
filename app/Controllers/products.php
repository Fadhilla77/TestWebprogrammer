<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    public function index()
    {
        // Load your product listing view with data
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll(); // Fetch all products

        return view('products/index', $data);
    }

    public function create()
    {
        // Load your product creation view
        return view('products/create');
    }

    public function store()
{
    $productModel = new ProductModel();

    // Get form input values
    $category = $this->request->getPost('category');
    $name = $this->request->getPost('name');
    $purchasePrice = $this->request->getPost('purchase_price');
    $sellingPrice = $this->request->getPost('selling_price');
    $stockQuantity = $this->request->getPost('stock_quantity');
    $image = $this->request->getFile('image');

    // Move uploaded image to the writable/uploads directory
    $newName = $image->getRandomName();
    $image->move('./writable/uploads', $newName);

    // Save data to the database
    $data = [
        'category' => $category,
        'name' => $name,
        'purchase_price' => $purchasePrice,
        'selling_price' => $sellingPrice,
        'stock_quantity' => $stockQuantity,
        'image' => $newName,
    ];

    $productModel->insert($data);

    // Redirect to the product listing page or show success/error message
    return redirect()->to('/products');
}
}