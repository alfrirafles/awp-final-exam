@extends('layouts.app')
{{--Include Stylesheet please--}}
@section('content')
    <form method="get" action="#">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Scale</th>
                <th scope="col">Vendor</th>
                <th scope="col">Description</th>
                <th scope="col">Buy Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->productScale }}</td>
                    <td>{{ $product->productVendor }}</td>
                    <td>{{ $product->productDescription }}</td>
                    <td>{{ $product->MSRP }}</td>
                    <td>
                        <a class="add-anchor" href="#">Add to Cart</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
