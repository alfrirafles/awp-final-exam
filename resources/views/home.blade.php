@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body justify-content-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            Test
                        </div>
                    @endif
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/products">Products</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/customers">Customers</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/orders">Orders</a>
                            </li>
                        </ul>
                </div>
{{--                    {{ __('You are logged in, ') }}{{ auth()->user()->name }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
