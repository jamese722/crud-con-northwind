@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? __('Show') . " " . __('Customer') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Customerid:</strong>
                                    {{ $customer->CustomerID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Companyname:</strong>
                                    {{ $customer->CompanyName }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contactname:</strong>
                                    {{ $customer->ContactName }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contacttitle:</strong>
                                    {{ $customer->ContactTitle }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $customer->Address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>City:</strong>
                                    {{ $customer->City }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Region:</strong>
                                    {{ $customer->Region }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Postalcode:</strong>
                                    {{ $customer->PostalCode }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Country:</strong>
                                    {{ $customer->Country }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone:</strong>
                                    {{ $customer->Phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fax:</strong>
                                    {{ $customer->Fax }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
