@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Productid:</strong>
                                    {{ $product->ProductID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Productname:</strong>
                                    {{ $product->ProductName }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Supplierid:</strong>
                                    {{ $product->SupplierID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categoryid:</strong>
                                    {{ $product->CategoryID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Quantityperunit:</strong>
                                    {{ $product->QuantityPerUnit }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unitprice:</strong>
                                    {{ $product->UnitPrice }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unitsinstock:</strong>
                                    {{ $product->UnitsInStock }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unitsonorder:</strong>
                                    {{ $product->UnitsOnOrder }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reorderlevel:</strong>
                                    {{ $product->ReorderLevel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Discontinued:</strong>
                                    {{ $product->Discontinued }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
