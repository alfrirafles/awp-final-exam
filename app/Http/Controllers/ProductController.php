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

    public function list(string $category){

        $listing = Product::where('productLine', $this->formatSlug($category))->get();
        return view('products.list', [
            'products' => $listing
        ]);
    }

    public function search(Request $request){
        $term = $request->input('term');

        $products = Product::query()
            ->where('productDescription', 'LIKE', '%'.$term.'%')
            ->orWhere('productName', 'LIKE', '%'.$term.'%')
            ->get();

        return view('products.list', [
           'products' => $products
        ]);
    }

    public function formatSlug(string $slug): string{
        switch($slug):
            case 'classic-cars':
                return 'Classic Cars';
                break;
            case 'motorcycles':
                return 'Motorcycles';
                break;
            case 'planes':
                return 'Planes';
                break;
            case 'ships':
                return 'Ships';
                break;
            case 'trains':
                return 'Trains';
                break;
            case 'trucks-and-buses':
                return 'Trucks and Buses';
                break;
            case 'vintage-cars':
                return 'Vintage Cars';
                break;
            default:
        endswitch;
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
