@extends('layouts.admin')
@section('content')
    <form method="get" action="{{ route('customers.create') }}">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Contact Last Name</th>
                <th scope="col">Contact First Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address Line 1</th>
                <th scope="col">Address Line 2</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Postal Code</th>
                <th scope="col">Country</th>
                <th scope="col">Sales Rep Employee Number</th>
                <th scope="col">Credit Limit</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->customerNumber}}</td>
                    <td>{{$customer->customerName}}</td>
                    <td>{{$customer->contactLastName}}</td>
                    <td>{{$customer->contactFirstName}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->addressLine1}}</td>
                    <td>{{$customer->addressLine2}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->postalCode}}</td>
                    <td>{{$customer->country}}</td>
                    <td>{{$customer->salesRepEmployeeNumber}}</td>
                    <td>{{$customer->creditLimit}}</td>
                    <td>
                        <a class="edit-anchor" href="{{ route('customers.edit', $customer) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$customers->links()}}
        <?php
        if (isset($buttonVisible)) {
            if ($buttonVisible) {
                echo '<div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary" value="">Add a
                                    New Customer
                                </button>
                            </div>
                    </div>';
            }
        }
        ?>
    </form>
@endsection

