@extends('layouts.admin')
@section('content')
    <div class="col-md-6">
        <form action="{{ route('customers.update', $customer) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                <div class="col-sm-2">
                    <input name="customerNumber" type="text" class="form-control" id="customerNumber"
                           aria-describedby="customerNumberHelper" value="{{ $customer->customerNumber }}" disabled>
                </div>
                @error('customerNumber')
                <div class="col-sm-3 validation-block">
                    <small id="customerNumberHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="customerName" class="col-sm-3 col-form-label">Customer Name</label>
                <div class="col-sm-4">
                    <input name="customerName" type="text" class="form-control" id="customerName"
                           aria-describedby="customerNameHelper" value="{{ $customer->customerName }}" required>
                </div>
                @error('customerName')
                <div class="col-sm-3 validation-block">
                    <small id="customerNameHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="contactFirstName" class="col-sm-3 col-form-label">Contact First Name</label>
                <div class="col-sm-3">
                    <input name="contactFirstName" type="text" class="form-control" id="contactFirstName"
                           aria-describedby="contactFirstNameHelper" value="{{ $customer->contactFirstName }}" required>
                </div>
                @error('contactFirstName')
                <div class="col-sm-3 validation-block">
                    <small id="contactFirstNameHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="contactLastName" class="col-sm-3 col-form-label">Contact Last Name</label>
                <div class="col-sm-3">
                    <input name="contactLastName" type="text" class="form-control" id="contactLastName"
                           aria-describedby="contactLastNameHelper" value="{{ $customer->contactLastName }}" required>
                </div>
                @error('contactLastName')
                <div class="col-sm-3 validation-block">
                    <small id="contactLastNameHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-3">
                    <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelper"
                           value="{{ $customer->phone }}" required>
                </div>
                @error('phone')
                <div class="col-sm-3 validation-block">
                    <small id="phoneHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="addressLine1" class="col-sm-3 col-form-label">Address Line 1</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="addressLine1" id="addressLine1" rows="4"
                              aria-describedby="addressLineHelper" required>{{ $customer->addressLine1 }}</textarea>
                </div>
                @error('addressLine1')
                <div class="col-sm-3 validation-block">
                    <small id="addressLineHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="addressLine2" class="col-sm-3 col-form-label">Address Line 2</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="addressLine2" id="addressLine2"
                              rows="4">{{ $customer->addressLine2 }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-2">
                    <input name="city" type="text" class="form-control" id="city" aria-describedby="cityHelper"
                           value="{{ $customer->city }}" required>
                </div>
                @error('city')
                <div class="col-sm-3 validation-block">
                    <small id="cityHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="state" class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-2">
                    <input name="state" type="text" class="form-control" id="state" value="{{ $customer->state }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="postalCode" class="col-sm-3 col-form-label">Postal Code</label>
                <div class="col-sm-2">
                    <input name="postalCode" type="text" class="form-control" id="postalCode"
                           aria-describedby="postalCodeHelper" value="{{ $customer->postalCode }}" required>
                </div>
                @error('postalCode')
                <div class="col-sm-3 validation-block">
                    <small id="postalCodeHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="country" class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-2">
                    <input name="country" type="text" class="form-control" id="country" aria-describedby="countryHelper"
                           value="{{ $customer->country }}" required>
                </div>
                @error('country')
                <div class="col-sm-3 validation-block">
                    <small id="countryHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="salesRepEmployeeNumber" class="col-sm-3 col-form-label">Sales Representative</label>
                <div class="col-sm-4">
                    <select name="salesRepEmployeeNumber" class="custom-select" id="salesRepEmployeeNumber"
                            aria-describedby="salesRepHelper" required>
                        <option
                            value="{{ $customer->salesRep->employeeNumber }}">{{ $customer->salesRep->employeeNumber }}
                            - {{ $customer->salesRep-> firstName }} {{ $customer->salesRep->lastName }}</option>
                        @foreach($employees as $salesRep)
                            <option
                                value="{{$salesRep->employeeNumber}}">{{$salesRep->employeeNumber}}
                                - {{$salesRep->firstName}} {{$salesRep->lastName}}</option>
                        @endforeach
                    </select>
                </div>
                @error('salesRepEmployeeNumber')
                <div class="col-sm-3 validation-block">
                    <small id="salesRepHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="creditLimit" class="col-sm-3 col-form-label">Credit Limit</label>
                <div class="col-sm-2">
                    <input name="creditLimit" type="text" class="form-control" id="creditLimit"
                           aria-describedby="creditLimitHelper" value="{{ $customer->creditLimit }}" required>
                </div>
                @error('creditLimit')
                <div class="col-sm-3 validation-block">
                    <small id="creditLimitHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update Information</button>
                </div>
            </div>
        </form>
        <form action="{{ route('customers.destroy', $customer) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button id="delete-button" type="submit" class="btn btn-warning">Delete Customer</button>
                </div>
                <div class="col-sm-6">
                    <small class="form-text text-danger">*Once pressed operations cannot be undone.</small>
                </div>
            </div>
        </form>
    </div>
@endsection
