@extends('layouts.app')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection
@section('content')
    <form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <h1 class="section-title">Shopping Cart</h1>
                    </div>
                    <hr class="solid" style="border-top: 4px solid #bbb;">
                    @foreach($products as $product)
                        <div class="row">
                            <h2 class="product-names">{{ $product->productName }}</h2>
                            <h4 class="product-descriptions">{{ $product->productDescription }}</h4>
                        </div>
                        <hr class="solid" style="border-top: 2px solid #bbb;">
                        <div class="row">
                            <hr class="solid">
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-2">
                                    <input type="email" class="form-control" id="inputQuantity"
                                           value="{{ $product->pivot->quantity }}">
                                </div>
                                <div class="col-sm-5">
                                    <h4>Total Price: {{ $product->pivot->quantity * $product->MSRP }}</h4>
                                </div>
                            </div>
                        </div>
                        <hr class="solid" style="border-top: 2px solid #bbb;">
                    @endforeach
                </div>
                <div class="col-md-3" id="orderCard">
                    <div class="row order-summary-row">
                        <h1 class="section-title">Order Summary</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="inlineFormCustomSelect">Shipping Duration</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Choose Shipping Options..</option>
                                <option value="1">Regular - 5 Day</option>
                                <option value="2">Express - 3 Day</option>
                                <option value="3">Instant - 1 Day</option>
                            </select>
                        </div>
                    </div>
                    <hr class="solid" style="border-top: 2px solid #bbb;">
                    <div class="row order-summary-row">
                        <button class="btn btn-primary" id="order-button">Place Order</button>
                    </div>
                    <div class="row order-summary-row order-summary-row-info">
                        <div class="col-sm-4 summary-labels"><h4 class="label">Items</h4></div>
                        <div class="col-sm-3">:</div>
                        <div class="col-sm-4">{{ count($products) }}</div>
                    </div>
                    <div class="row order-summary-row order-summary-row-info">
                        <div class="col-sm-4 summary-labels"><h4 class="label">Total Price</h4></div>
                        <div class="col-sm-3">:</div>
                        <div class="col-sm-4">{{ $cartValue }}</div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
