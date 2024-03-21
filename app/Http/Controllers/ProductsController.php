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
    public function processNewProduct(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|min:2',
            'price' => 'required|numeric',
            'description' => 'required|min:2',
            'img' => 'min:2',
            'img-description' => 'min:2',
            'category' => 'required|min:2',
        ]);

        Product::create($data);
        return  redirect()
            ->route('products')
            ->with('message.success', 'El producto ' . '"' . e($data['name']) . '"' . ' se creo exitosamente.');
    }
}
