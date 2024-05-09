<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="customer_i_d" class="form-label">{{ __('Customerid') }}</label>
            <input type="text" name="CustomerID" class="form-control @error('CustomerID') is-invalid @enderror" value="{{ old('CustomerID', $customer?->CustomerID) }}" id="customer_i_d" placeholder="Customerid">
            {!! $errors->first('CustomerID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="company_name" class="form-label">{{ __('Companyname') }}</label>
            <input type="text" name="CompanyName" class="form-control @error('CompanyName') is-invalid @enderror" value="{{ old('CompanyName', $customer?->CompanyName) }}" id="company_name" placeholder="Companyname">
            {!! $errors->first('CompanyName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contact_name" class="form-label">{{ __('Contactname') }}</label>
            <input type="text" name="ContactName" class="form-control @error('ContactName') is-invalid @enderror" value="{{ old('ContactName', $customer?->ContactName) }}" id="contact_name" placeholder="Contactname">
            {!! $errors->first('ContactName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contact_title" class="form-label">{{ __('Contacttitle') }}</label>
            <input type="text" name="ContactTitle" class="form-control @error('ContactTitle') is-invalid @enderror" value="{{ old('ContactTitle', $customer?->ContactTitle) }}" id="contact_title" placeholder="Contacttitle">
            {!! $errors->first('ContactTitle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="Address" class="form-control @error('Address') is-invalid @enderror" value="{{ old('Address', $customer?->Address) }}" id="address" placeholder="Address">
            {!! $errors->first('Address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="city" class="form-label">{{ __('City') }}</label>
            <input type="text" name="City" class="form-control @error('City') is-invalid @enderror" value="{{ old('City', $customer?->City) }}" id="city" placeholder="City">
            {!! $errors->first('City', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="region" class="form-label">{{ __('Region') }}</label>
            <input type="text" name="Region" class="form-control @error('Region') is-invalid @enderror" value="{{ old('Region', $customer?->Region) }}" id="region" placeholder="Region">
            {!! $errors->first('Region', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="postal_code" class="form-label">{{ __('Postalcode') }}</label>
            <input type="text" name="PostalCode" class="form-control @error('PostalCode') is-invalid @enderror" value="{{ old('PostalCode', $customer?->PostalCode) }}" id="postal_code" placeholder="Postalcode">
            {!! $errors->first('PostalCode', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="country" class="form-label">{{ __('Country') }}</label>
            <input type="text" name="Country" class="form-control @error('Country') is-invalid @enderror" value="{{ old('Country', $customer?->Country) }}" id="country" placeholder="Country">
            {!! $errors->first('Country', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="Phone" class="form-control @error('Phone') is-invalid @enderror" value="{{ old('Phone', $customer?->Phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('Phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fax" class="form-label">{{ __('Fax') }}</label>
            <input type="text" name="Fax" class="form-control @error('Fax') is-invalid @enderror" value="{{ old('Fax', $customer?->Fax) }}" id="fax" placeholder="Fax">
            {!! $errors->first('Fax', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>