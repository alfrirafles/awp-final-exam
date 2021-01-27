@extends('layouts.admin')
@section('content')
    <div class="col-md-6">
        <form method="post" action="{{ route('orders.store') }}">
            @csrf
            <div class="form-group row">
                <label for="orderNumber" class="col-sm-3 col-form-label">Order Number</label>
                <div class="col-sm-2">
                    <input name="orderNumber" type="text" class="form-control" id="orderNumber"
                           aria-describedby="orderNumberHelper" required>
                </div>
                @error('orderNumber')
                <div class="col-sm-3 validation-block">
                    <small id="orderNumberHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                <div class="col-sm-2">
                    <select name="customerNumber" class="custom-select" id="customerNumber"
                            aria-describedby="customerNumberHelper" required>
                        <option>Choose...</option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->customerNumber}}">{{$customer->customerNumber}}
                                - {{ $customer->customerName }}</option>
                        @endforeach
                    </select>
                </div>
                @error('customerNumber')
                <div class="col-sm-3 validation-block">
                    <small id="customerNumberHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="orderDate" class="col-sm-3 col-form-label">Order Date</label>
                <div class="col-sm-2">
                    <input name="orderDate" type="text" class="form-control" id="orderDate"
                           aria-describedby="orderDateHelper" required>
                </div>
                @error('orderDate')
                <div class="col-sm-3 validation-block">
                    <small id="orderDateHelper" class="form-text text-danger validations">*Required with format
                        'YYYY/MM/DD'</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="requiredDate" class="col-sm-3 col-form-label">Required Date</label>
                <div class="col-sm-2">
                    <input name="requiredDate" type="text" class="form-control" id="requiredDate"
                           aria-describedby="requiredDateHelper" required>
                </div>
                @error('requiredDate')
                <div class="col-sm-3 validation-block">
                    <small id="requiredDateHelper" class="form-text text-danger validations">*Required with format:
                        'YYYY/MM/DD'</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="shippedDate" class="col-sm-3 col-form-label">Shipped Date</label>
                <div class="col-sm-2">
                    <input name="shippedDate" type="text" class="form-control" id="shippedDate"
                           aria-describedby="shippedDateHelper">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-2">
                    <select name="status" class="custom-select" id="status" aria-describedby="statusHelper" required>
                        <option>Choose...</option>
                        @foreach($status as $state)
                            <option value="{{$state->status}}">{{$state->status}}</option>
                        @endforeach
                    </select>
                </div>
                @error('status')
                <div class="col-sm-3 validation-block">
                    <small id="statusHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="comments" class="col-sm-3 col-form-label">Comments</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="comments" id="comments" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button name="submit" type="submit" class="btn btn-primary">Add Order</button>
                </div>
            </div>
        </form>
    </div>
@endsection
