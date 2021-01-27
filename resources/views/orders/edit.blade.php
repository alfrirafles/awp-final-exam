@extends('layouts.admin')
@section('content')
    <div class="col-md-6">
        <form method="post" action="{{ route('orders.update', $order) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="orderNumber" class="col-sm-3 col-form-label">Order Number</label>
                <div class="col-sm-2">
                    <input name="orderNumber" type="text" class="form-control" id="orderNumber"
                           aria-describedby="orderNumberHelper" value="{{ $order->orderNumber }}" disabled>
                </div>
                @error('orderNumber')
                <div class="col-sm-3 validation-block">
                    <small id="orderNumberHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                <div class="col-sm-6">
                    <select name="customerNumber" class="custom-select" id="customerNumber"
                            aria-describedby="customerNumberHelper" disabled>
                        <option value="{{ $order->customer->customerNumber }}">{{ $order->customer->customerNumber }}
                            - {{ $order->customer->customerName }}</option>
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
                <div class="col-sm-3">
                    <input name="orderDate" type="text" class="form-control" id="orderDate"
                           aria-describedby="orderDateHelper" value="{{ $order->orderDate }}" disabled>
                </div>
                @error('orderDate')
                <div class="col-sm-3 validation-block">
                    <small id="orderDateHelper" class="form-text text-danger validations">*Required with format:
                        'YYYY/MM/DD'</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="requiredDate" class="col-sm-3 col-form-label">Required Date</label>
                <div class="col-sm-3">
                    <input name="requiredDate" type="text" class="form-control" id="requiredDate"
                           aria-describedby="requiredDateHelper" value="{{ $order->requiredDate }}" disabled>
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
                <div class="col-sm-3">
                    <input name="shippedDate" type="text" class="form-control" id="shippedDate"
                           aria-describedby="shippedDateHelper" value="{{ $order->shippedDate }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-3">
                    <select name="status" class="custom-select" id="status" aria-describedby="statusHelper" required>
                        <option value="{{ $order->status }}">{{ $order->status }}</option>
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
                    <textarea class="form-control" name="comments" id="comments"
                              rows="4">{{ $order->comments }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button name="submit" type="submit" class="btn btn-primary">Update Information</button>
                </div>
            </div>
        </form>
        <form action="{{ route('orders.destroy', $order) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button id="delete-button" type="submit" class="btn btn-warning">Delete Order</button>
                </div>
                <div class="col-sm-6">
                    <small class="form-text text-danger">*Once pressed operations cannot be undone.</small>
                </div>
            </div>
        </form>
    </div>
@endsection
