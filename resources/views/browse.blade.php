@extends('layouts.app')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/browse.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 left-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[0]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[0]['textDescription']}}</p>
                        <a href="/products/classic-cars" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 center-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[1]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[1]['textDescription']}}</p>
                        <a href="/products/motorcycles" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[2]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[2]['textDescription']}}</p>
                        <a href="/products/planes" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 left-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[3]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[3]['textDescription']}}</p>
                        <a href="/products/ships" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 center-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[4]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[4]['textDescription']}}</p>
                        <a href="/products/trains" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[5]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[5]['textDescription']}}</p>
                        <a href="/products/trucks-and-buses" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 left-column">
            </div>
            <div class="col-md-4 center-column">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$productLines[6]['productLine']}}</h5>
                        <p class="card-text">{{$productLines[6]['textDescription']}}</p>
                        <a href="/products/vintage-cars" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-column">
            </div>
        </div>
    </div>
@endsection
