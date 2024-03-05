<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.products', [
            'products' => $products,
        ]);
    }
    public function view($id)
    {
        $product = Product::findOrFail($id);

        return view('products.view', [
            'product' => $product,
        ]);
    }
    public function createProduct()
    {
        return view('products.create-product');
    }
    public function processNewProduct()
    {
        echo 'Recibiendo los datos :)';
    }
}
