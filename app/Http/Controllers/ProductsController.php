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

        $request->validate(Product::validationRules(), Product::validationMessages());

        Product::create($data);
        return  redirect()
            ->route('products')
            ->with('message.success', 'The product ' . '"' . e($data['name']) . '"' . ' has been successfully created.');
    }

    public function confirmDelete($id)
    {
        $product = Product::findOrFail($id);

        return view('products.confirmDelete', [
            'product' => $product,
        ]);
    }

    public function processDelete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return  redirect()
            ->route('products')
            ->with('message.success', 'The product ' . '"' . e($product['name']) . '"' . ' has been deleted successfully.');
    }
}
