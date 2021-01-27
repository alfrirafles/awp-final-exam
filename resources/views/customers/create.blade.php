@extends('layouts.admin')
@section('content')
    <div class="col-md-6">
        <form action="{{ route('customers.store')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="customerNumber" class="col-sm-3 col-form-label">Customer Number</label>
                <div class="col-sm-2">
                    <input name="customerNumber" type="text" class="form-control" id="customerNumber"
                           aria-describedby="customerNumberHelper" value="{{ old('customerNumber') }}" required>
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
                    <input name="customerName" type="text" class="form-control" id="customerName" aria-describedby="customerNameHelper" value="{{ old('customerName') }}" required>
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
                    <input name="contactFirstName" type="text" class="form-control" id="contactFirstName" aria-describedby="contactFirstNameHelper" value="{{ old('contactFirstName') }}" required>
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
                    <input name="contactLastName" type="text" class="form-control" id="contactLastName" aria-describedby="contactLastNameHelper" value="{{ old('contactLastName') }}" required>
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
                    <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelper" value="{{ old('phone') }}" required>
                </div>
                @error('phone')
                <div class="col-sm-3 validation-block">
                    <small id="phoneHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="addressLine1" class="col-sm-3 col-form-label">Address Label</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="addressLine1" id="addressLine1" rows="4" aria-describedby="addressLineHelper" required>{{ old('addressLine1') }}</textarea>
                </div>
                @error('addressLine1')
                <div class="col-sm-3 validation-block">
                    <small id="addressLineHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="addressLine2" class="col-sm-3 col-form-label">Address Label</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="addressLine2" id="addressLine2" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-2">
                    <input name="city" type="text" class="form-control" id="city" aria-describedby="cityHelper" value="{{ old('city') }}" required>
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
                    <input name="state" type="text" class="form-control" id="state">
                </div>
            </div>
            <div class="form-group row">
                <label for="postalCode" class="col-sm-3 col-form-label">Postal Code</label>
                <div class="col-sm-2">
                    <input name="postalCode" type="text" class="form-control" id="postalCode" aria-describedby="postalCodeHelper" value="{{ old('postalCode') }}" required>
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
                    <input name="country" type="text" class="form-control" id="country" aria-describedby="countryHelper" value="{{ old('country') }}" required>
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
                    <select name="salesRepEmployeeNumber" class="custom-select" id="salesRepEmployeeNumber" aria-describedby="salesRepHelper" required>
                        <option value="0">Choose...</option>
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
                    <input name="creditLimit" type="text" class="form-control" id="creditLimit" aria-describedby="creditLimitHelper" value="{{ old('creditLimit') }}" required>
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
                    <button type="submit" class="btn btn-primary">Add Customer</button>
                </div>
            </div>
        </form>
    </div>
@endsection('content')
