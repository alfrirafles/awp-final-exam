<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($product)
    {
        return view('products', [
            'product' => Product::where('productCode', $product)->firstOrFail()
        ]);
    }

    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(10),
            'buttonVisible' => true
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'products' => Product::class,
            'scales' => Product::select('productScale')->distinct()->get(),
            'lines' => \App\Models\ProductLine::select('productLine')->distinct()->get(),
            'vendors' => Product::select('productVendor')->distinct()->get(),
            'buttonVisible' => false
        ]);
    }

    public function store()
    {
        Product::create($this->validateInputs());
        return redirect('/products');
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'lines' => \App\Models\ProductLine::select('productLine')->distinct()->get(),
            'scales' => Product::select('productScale')->distinct()->get(),
            'vendors' => Product::select('productVendor')->distinct()->get()
        ]);
    }

    public function update(Product $product)
    {
        $product->update($this->validateInputs(true));
        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');

    }

    /**
     * @return array
     */
    public function validateInputs(bool $edit = false): array
    {
        $validatedInput = request()->validate([
            'productName' => 'required',
            'productLine' => 'required',
            'productScale' => 'required',
            'productVendor' => 'required',
            'productDescription' => 'required',
            'quantityInStock' => 'required',
            'buyPrice' => 'required',
            'msrp' => 'required'
        ]);
        if (!$edit) {
            return array_merge($validatedInput, request()->validate(['productCode' => 'required']));
        } else {
            return $validatedInput;
        }
    }
}
