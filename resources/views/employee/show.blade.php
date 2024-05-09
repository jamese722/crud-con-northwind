@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? __('Show') . " " . __('Employee') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('employees.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Employeeid:</strong>
                                    {{ $employee->EmployeeID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lastname:</strong>
                                    {{ $employee->LastName }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Firstname:</strong>
                                    {{ $employee->FirstName }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Title:</strong>
                                    {{ $employee->Title }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titleofcourtesy:</strong>
                                    {{ $employee->TitleOfCourtesy }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Birthdate:</strong>
                                    {{ $employee->BirthDate }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hiredate:</strong>
                                    {{ $employee->HireDate }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $employee->Address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>City:</strong>
                                    {{ $employee->City }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Region:</strong>
                                    {{ $employee->Region }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Postalcode:</strong>
                                    {{ $employee->PostalCode }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Country:</strong>
                                    {{ $employee->Country }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Homephone:</strong>
                                    {{ $employee->HomePhone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Extension:</strong>
                                    {{ $employee->Extension }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Photo:</strong>
                                    {{ $employee->Photo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notes:</strong>
                                    {{ $employee->Notes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reportsto:</strong>
                                    {{ $employee->ReportsTo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Photopath:</strong>
                                    {{ $employee->PhotoPath }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
