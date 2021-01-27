@extends('layouts.admin')
@section('content')
    <form method="get" action="{{ route('orders.create') }}">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Date</th>
                <th scope="col">Required Date</th>
                <th scope="col">Shipped Date</th>
                <th scope="col">Status</th>
                <th scope="col">Comments</th>
                <th scope="col">Customer Number</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->orderNumber}}</td>
                    <td>{{$order->orderDate}}</td>
                    <td>{{$order->requiredDate}}</td>
                    <td>{{$order->shippedDate}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->comments}}</td>
                    <td>{{$order->customerNumber}}</td>
                    <td>
                        <a class="edit-anchor" href="{{ route('orders.edit', $order) }}">Edit</a>
                        {{--                    <button name="productCode" type="submit" class="btn btn-primary" value="{{$customer->customerNumber}}">Edit</button>--}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{$orders->links()}}
        <?php
        if (isset($buttonVisible)) {
            if ($buttonVisible) {
                echo '<div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary" value="">Add a New Order</button>
                            </div>
                    </div>';
            }
        }
        ?>
    </form>
@endsection

