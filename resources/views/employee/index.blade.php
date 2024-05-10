@extends('layouts.app')

@section('template_title')
    Employees
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Employees') }}
                            </span>

                            
                              <div class="float-right">
                                <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla clientes') }}
                                </a>
                              </div>

                              <div class="float-right">
                                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Tabla productos') }}
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
                                        
									<th >Employeeid</th>
									<th >Lastname</th>
									<th >Firstname</th>
									<th >Title</th>
									<th >Titleofcourtesy</th>
									<th >Birthdate</th>
									<th >Hiredate</th>
									<th >Address</th>
									<th >City</th>
									<th >Region</th>
									<th >Postalcode</th>
									<th >Country</th>
									<th >Homephone</th>
									<th >Extension</th>
									<th >Photo</th>
									<th >Notes</th>
									<th >Reportsto</th>
									<th >Photopath</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $employee->EmployeeID }}</td>
										<td >{{ $employee->LastName }}</td>
										<td >{{ $employee->FirstName }}</td>
										<td >{{ $employee->Title }}</td>
										<td >{{ $employee->TitleOfCourtesy }}</td>
										<td >{{ $employee->BirthDate }}</td>
										<td >{{ $employee->HireDate }}</td>
										<td >{{ $employee->Address }}</td>
										<td >{{ $employee->City }}</td>
										<td >{{ $employee->Region }}</td>
										<td >{{ $employee->PostalCode }}</td>
										<td >{{ $employee->Country }}</td>
										<td >{{ $employee->HomePhone }}</td>
										<td >{{ $employee->Extension }}</td>
										<td >{{ $employee->Photo }}</td>
										<td >{{ $employee->Notes }}</td>
										<td >{{ $employee->ReportsTo }}</td>
										<td >{{ $employee->PhotoPath }}</td>

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
                {!! $employees->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
