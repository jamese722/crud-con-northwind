@extends('layouts.app')

@section('template_title')
    Customers
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Customers') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla productos') }}
                                </a>
                              </div>

                              <div class="float-right">
                                <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla empleados') }}
                                </a>
                              </div>

                             <div class="float-right">
                                <a href="{{ route('customers.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Customerid</th>
									<th >Companyname</th>
									<th >Contactname</th>
									<th >Contacttitle</th>
									<th >Address</th>
									<th >City</th>
									<th >Region</th>
									<th >Postalcode</th>
									<th >Country</th>
									<th >Phone</th>
									<th >Fax</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $customer->CustomerID }}</td>
										<td >{{ $customer->CompanyName }}</td>
										<td >{{ $customer->ContactName }}</td>
										<td >{{ $customer->ContactTitle }}</td>
										<td >{{ $customer->Address }}</td>
										<td >{{ $customer->City }}</td>
										<td >{{ $customer->Region }}</td>
										<td >{{ $customer->PostalCode }}</td>
										<td >{{ $customer->Country }}</td>
										<td >{{ $customer->Phone }}</td>
										<td >{{ $customer->Fax }}</td>

                                            <td>
                                                
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $customers->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
