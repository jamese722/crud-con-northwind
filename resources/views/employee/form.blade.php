<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="employee_i_d" class="form-label">{{ __('Employeeid') }}</label>
            <input type="text" name="EmployeeID" class="form-control @error('EmployeeID') is-invalid @enderror" value="{{ old('EmployeeID', $employee?->EmployeeID) }}" id="employee_i_d" placeholder="Employeeid">
            {!! $errors->first('EmployeeID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="last_name" class="form-label">{{ __('Lastname') }}</label>
            <input type="text" name="LastName" class="form-control @error('LastName') is-invalid @enderror" value="{{ old('LastName', $employee?->LastName) }}" id="last_name" placeholder="Lastname">
            {!! $errors->first('LastName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="first_name" class="form-label">{{ __('Firstname') }}</label>
            <input type="text" name="FirstName" class="form-control @error('FirstName') is-invalid @enderror" value="{{ old('FirstName', $employee?->FirstName) }}" id="first_name" placeholder="Firstname">
            {!! $errors->first('FirstName', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="title" class="form-label">{{ __('Title') }}</label>
            <input type="text" name="Title" class="form-control @error('Title') is-invalid @enderror" value="{{ old('Title', $employee?->Title) }}" id="title" placeholder="Title">
            {!! $errors->first('Title', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="title_of_courtesy" class="form-label">{{ __('Titleofcourtesy') }}</label>
            <input type="text" name="TitleOfCourtesy" class="form-control @error('TitleOfCourtesy') is-invalid @enderror" value="{{ old('TitleOfCourtesy', $employee?->TitleOfCourtesy) }}" id="title_of_courtesy" placeholder="Titleofcourtesy">
            {!! $errors->first('TitleOfCourtesy', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="birth_date" class="form-label">{{ __('Birthdate') }}</label>
            <input type="text" name="BirthDate" class="form-control @error('BirthDate') is-invalid @enderror" value="{{ old('BirthDate', $employee?->BirthDate) }}" id="birth_date" placeholder="Birthdate">
            {!! $errors->first('BirthDate', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hire_date" class="form-label">{{ __('Hiredate') }}</label>
            <input type="text" name="HireDate" class="form-control @error('HireDate') is-invalid @enderror" value="{{ old('HireDate', $employee?->HireDate) }}" id="hire_date" placeholder="Hiredate">
            {!! $errors->first('HireDate', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="Address" class="form-control @error('Address') is-invalid @enderror" value="{{ old('Address', $employee?->Address) }}" id="address" placeholder="Address">
            {!! $errors->first('Address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="city" class="form-label">{{ __('City') }}</label>
            <input type="text" name="City" class="form-control @error('City') is-invalid @enderror" value="{{ old('City', $employee?->City) }}" id="city" placeholder="City">
            {!! $errors->first('City', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="region" class="form-label">{{ __('Region') }}</label>
            <input type="text" name="Region" class="form-control @error('Region') is-invalid @enderror" value="{{ old('Region', $employee?->Region) }}" id="region" placeholder="Region">
            {!! $errors->first('Region', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="postal_code" class="form-label">{{ __('Postalcode') }}</label>
            <input type="text" name="PostalCode" class="form-control @error('PostalCode') is-invalid @enderror" value="{{ old('PostalCode', $employee?->PostalCode) }}" id="postal_code" placeholder="Postalcode">
            {!! $errors->first('PostalCode', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="country" class="form-label">{{ __('Country') }}</label>
            <input type="text" name="Country" class="form-control @error('Country') is-invalid @enderror" value="{{ old('Country', $employee?->Country) }}" id="country" placeholder="Country">
            {!! $errors->first('Country', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="home_phone" class="form-label">{{ __('Homephone') }}</label>
            <input type="text" name="HomePhone" class="form-control @error('HomePhone') is-invalid @enderror" value="{{ old('HomePhone', $employee?->HomePhone) }}" id="home_phone" placeholder="Homephone">
            {!! $errors->first('HomePhone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="extension" class="form-label">{{ __('Extension') }}</label>
            <input type="text" name="Extension" class="form-control @error('Extension') is-invalid @enderror" value="{{ old('Extension', $employee?->Extension) }}" id="extension" placeholder="Extension">
            {!! $errors->first('Extension', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="photo" class="form-label">{{ __('Photo') }}</label>
            <input type="text" name="Photo" class="form-control @error('Photo') is-invalid @enderror" value="{{ old('Photo', $employee?->Photo) }}" id="photo" placeholder="Photo">
            {!! $errors->first('Photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notes" class="form-label">{{ __('Notes') }}</label>
            <input type="text" name="Notes" class="form-control @error('Notes') is-invalid @enderror" value="{{ old('Notes', $employee?->Notes) }}" id="notes" placeholder="Notes">
            {!! $errors->first('Notes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reports_to" class="form-label">{{ __('Reportsto') }}</label>
            <input type="text" name="ReportsTo" class="form-control @error('ReportsTo') is-invalid @enderror" value="{{ old('ReportsTo', $employee?->ReportsTo) }}" id="reports_to" placeholder="Reportsto">
            {!! $errors->first('ReportsTo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="photo_path" class="form-label">{{ __('Photopath') }}</label>
            <input type="text" name="PhotoPath" class="form-control @error('PhotoPath') is-invalid @enderror" value="{{ old('PhotoPath', $employee?->PhotoPath) }}" id="photo_path" placeholder="Photopath">
            {!! $errors->first('PhotoPath', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>