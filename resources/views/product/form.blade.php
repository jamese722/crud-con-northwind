<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="product_i_d" class="form-label">{{ __('Productid') }}</label>
            <input type="text" name="ProductID" class="form-control @error('ProductID') is-invalid @enderror" value="{{ old('ProductID', $product?->ProductID) }}" id="product_i_d" placeholder="Productid">
            {!! $errors->first('ProductID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="product_name" class="form-label">{{ __('Productname') }}</label>
            <input type="text" name="ProductName" class="form-control @error('ProductName') is-invalid @enderror" value="{{ old('ProductName', $product?->ProductName) }}" id="product_name" placeholder="Productname">
            {!! $errors->first('ProductName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="supplier_i_d" class="form-label">{{ __('Supplierid') }}</label>
            <input type="text" name="SupplierID" class="form-control @error('SupplierID') is-invalid @enderror" value="{{ old('SupplierID', $product?->SupplierID) }}" id="supplier_i_d" placeholder="Supplierid">
            {!! $errors->first('SupplierID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="category_i_d" class="form-label">{{ __('Categoryid') }}</label>
            <input type="text" name="CategoryID" class="form-control @error('CategoryID') is-invalid @enderror" value="{{ old('CategoryID', $product?->CategoryID) }}" id="category_i_d" placeholder="Categoryid">
            {!! $errors->first('CategoryID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quantity_per_unit" class="form-label">{{ __('Quantityperunit') }}</label>
            <input type="text" name="QuantityPerUnit" class="form-control @error('QuantityPerUnit') is-invalid @enderror" value="{{ old('QuantityPerUnit', $product?->QuantityPerUnit) }}" id="quantity_per_unit" placeholder="Quantityperunit">
            {!! $errors->first('QuantityPerUnit', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="unit_price" class="form-label">{{ __('Unitprice') }}</label>
            <input type="text" name="UnitPrice" class="form-control @error('UnitPrice') is-invalid @enderror" value="{{ old('UnitPrice', $product?->UnitPrice) }}" id="unit_price" placeholder="Unitprice">
            {!! $errors->first('UnitPrice', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="units_in_stock" class="form-label">{{ __('Unitsinstock') }}</label>
            <input type="text" name="UnitsInStock" class="form-control @error('UnitsInStock') is-invalid @enderror" value="{{ old('UnitsInStock', $product?->UnitsInStock) }}" id="units_in_stock" placeholder="Unitsinstock">
            {!! $errors->first('UnitsInStock', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="units_on_order" class="form-label">{{ __('Unitsonorder') }}</label>
            <input type="text" name="UnitsOnOrder" class="form-control @error('UnitsOnOrder') is-invalid @enderror" value="{{ old('UnitsOnOrder', $product?->UnitsOnOrder) }}" id="units_on_order" placeholder="Unitsonorder">
            {!! $errors->first('UnitsOnOrder', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reorder_level" class="form-label">{{ __('Reorderlevel') }}</label>
            <input type="text" name="ReorderLevel" class="form-control @error('ReorderLevel') is-invalid @enderror" value="{{ old('ReorderLevel', $product?->ReorderLevel) }}" id="reorder_level" placeholder="Reorderlevel">
            {!! $errors->first('ReorderLevel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="discontinued" class="form-label">{{ __('Discontinued') }}</label>
            <input type="text" name="Discontinued" class="form-control @error('Discontinued') is-invalid @enderror" value="{{ old('Discontinued', $product?->Discontinued) }}" id="discontinued" placeholder="Discontinued">
            {!! $errors->first('Discontinued', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>