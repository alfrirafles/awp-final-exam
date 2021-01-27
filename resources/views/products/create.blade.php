@extends('layouts.admin')
@section('content')
    <div class="col-md-6">
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group row">
                <label for="productCode" class="col-sm-3 col-form-label">Code</label>
                <div class="col-sm-3">
                    <input name="productCode" type="text" class="form-control" id="productCode"
                           aria-describedby="productCodeHelper">
                </div>
                @error('productCode')
                <div class="col-sm-3 validation-block">
                    <small id="productCodeHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="productName" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input name="productName" type="text" class="form-control" id="productName" aria-describedby="productNameHelper">
                </div>
                @error('productName')
                <div class="col-sm-3 validation-block">
                    <small id="productNameHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="productLine" class="col-sm-3 col-form-label">Line</label>
                <div class="col-sm-3">
                    <select name="productLine" class="custom-select" id="productLine" aria-describedby="productLineHelper">
                        <option>Choose...</option>
                        @foreach($lines as $line)
                            <option value="{{$line->productLine}}">{{$line->productLine}}</option>
                        @endforeach
                    </select>
                </div>
                @error('productLine')
                <div class="col-sm-3 validation-block">
                    <small id="productLineHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="productScale" class="col-sm-3 col-form-label">Scale</label>
                <div class="col-sm-2">
                    <select name="productScale" class="custom-select" id="productScale" aria-describedby="productScaleHelper">
                        <option>Choose...</option>
                        @foreach($scales as $scale)
                            <option value="{{$scale->productScale}}">{{$scale->productScale}}</option>
                        @endforeach
                    </select>
                </div>
                @error('productScale')
                <div class="col-sm-3 validation-block">
                    <small id="productScaleHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="productVendor" class="col-sm-3 col-form-label">Vendor</label>
                <div class="col-sm-3">
                    <select name="productVendor" class="custom-select" id="productVendor" aria-describedby="productVendor">
                        <option>Choose...</option>
                        @foreach($vendors as $vendor)
                            <option value="{{$vendor->productVendor}}">{{$vendor->productVendor}}</option>
                        @endforeach
                    </select>
                </div>
                @error('productVendor')
                <div class="col-sm-3 validation-block">
                    <small id="productVendorHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="productDescription" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea name="productDescription" class="form-control" id="productDescription" rows="4" aria-describedby="descriptionHelper"></textarea>
                </div>
                @error('productDescription')
                <div class="col-sm-3 validation-block">
                    <small id="descriptionHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="quantityInStock" class="col-sm-3 col-form-label">Stock Quantity</label>
                <div class="col-sm-2">
                    <input name="quantityInStock" type="text" class="form-control" id="quantityInStock" aria-describedby="quantityHelper">
                </div>
                @error('quantityInStock')
                <div class="col-sm-3 validation-block">
                    <small id="quantityHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="buyPrice" class="col-sm-3 col-form-label">Buy Price</label>
                <div class="col-sm-2">
                    <input name="buyPrice" type="text" class="form-control" id="buyPrice" aria-describedby="priceHelper">
                </div>
                @error('buyPrice')
                <div class="col-sm-3 validation-block">
                    <small id="priceHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <label for="MSRP" class="col-sm-3 col-form-label">MSRP</label>
                <div class="col-sm-2">
                    <input name="msrp" type="text" class="form-control" id="MSRP" aria-describedby="msrpHelper">
                </div>
                @error('msrp')
                <div class="col-sm-3 validation-block">
                    <small id="msrpHelper" class="form-text text-danger validations">*Required</small>
                </div>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <button name="submit" type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </form>
    </div>
@endsection
