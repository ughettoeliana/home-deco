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
        return view('products.form-new');
    }

    public function processNewProduct(Request $request)
    {
        $data = $request->except('_token');

        $request->validate(Product::validationRules(), Product::validationMessages());

        if ($request->hasFile('image')) {
            $data['img'] = $this->uploadImage($request);
        }

        Product::create($data);
        return  redirect()
            ->route('products')
            ->with('message.success', 'The product ' . '"' . e($data['name']) . '"' . ' has been successfully created.');
    }

    public function formUpdate($id)
    {
        return view('products.form-update', [
            'product' => Product::findOrFail($id),
        ]);
    }

    public function processUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->except('_token');

        $request->validate(Product::validationRules(), Product::validationMessages());

        if ($request->hasFile('image')) {
            $data['img'] = $this->uploadImage($request);
        }

        $product->update($data);

        return  redirect()
            ->route('products')
            ->with('message.success', 'The product ' . '"' . e($product['name']) . '"' . ' has been successfully edited.');
    }

    public function confirmDelete($id)
    {
        return view('products.delete', [
            'product' =>  Product::findOrFail($id),
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

    /**
     * Guarda la imagen de la peticion y retorna el nombre generado.
     *
     * @param request $request
     * @return string
     *
     */

    protected function uploadImage(Request $request): string
    {
        $img = $request->file('image');
        $name = $request->input('name');

        $imgName = date('YmdHis_') . \Str::slug($name) . "." . $img->guessExtension();


        $img->move(public_path('imgs'), $imgName);

        return $imgName;
    }
}