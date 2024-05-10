@extends('layouts.app')

@section('template_title')
    Products
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Products') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla empleados') }}
                                </a>
                              </div>

                              <div class="float-right">
                                <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla clientes') }}
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
                                        
									<th >Productid</th>
									<th >Productname</th>
									<th >Supplierid</th>
									<th >Categoryid</th>
									<th >Quantityperunit</th>
									<th >Unitprice</th>
									<th >Unitsinstock</th>
									<th >Unitsonorder</th>
									<th >Reorderlevel</th>
									<th >Discontinued</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $product->ProductID }}</td>
										<td >{{ $product->ProductName }}</td>
										<td >{{ $product->SupplierID }}</td>
										<td >{{ $product->CategoryID }}</td>
										<td >{{ $product->QuantityPerUnit }}</td>
										<td >{{ $product->UnitPrice }}</td>
										<td >{{ $product->UnitsInStock }}</td>
										<td >{{ $product->UnitsOnOrder }}</td>
										<td >{{ $product->ReorderLevel }}</td>
										<td >{{ $product->Discontinued }}</td>

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
                {!! $products->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
