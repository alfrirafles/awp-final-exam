@extends('layouts.admin')
@section('content')
    <form method="get" action="{{ route('products.create') }}">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Product Line</th>
                <th scope="col">Product Scale</th>
                <th scope="col">Product Vendor</th>
                <th scope="col">Description</th>
                <th scope="col">Stock Quantity</th>
                <th scope="col">Buy Price</th>
                <th scope="col">MSRP</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->productCode}}</td>
                    <td>{{$product->productName}}</td>
                    <td>{{$product->productLine}}</td>
                    <td>{{$product->productScale}}</td>
                    <td>{{$product->productVendor}}</td>
                    <td>{{$product->productDescription}}</td>
                    <td>{{$product->quantityInStock}}</td>
                    <td>{{$product->buyPrice}}</td>
                    <td>{{$product->MSRP}}</td>
                    <td>
                        <a class="edit-anchor" href="{{ route('products.edit', $product) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
        <?php
        if (isset($buttonVisible)) {
            if ($buttonVisible) {
                echo '<div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary" value="">Add a New Product</button>
                            </div>
                    </div>';
            }
        }
        ?>
    </form>
@endsection

