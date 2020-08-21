@extends('layout')
@section('content')

        <div class="card border-primary mb-3">
            <div class="card-header">List of Employees</div>
                <div class="card-body">
                    <div class="row my-2">
                        <div class="col-md-12 text-right">
                        <a href="{{ route('employee.create')}}" class="btn btn-primary">Add Employee</a>
                        </div>
                    </div>
                    
                    @if(session()->has('status'))
                        <div class="alert alert-dismissible alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>PhoneNumber</th>
                                <th>Address</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             @forelse($employees as $employee)
                            <tr>
                                <td>
                                <a href="{{ route('employee.show', ['employee' => $employee->id])}}" class="btn btn-sm btn-primary">Detail</a>
                                </td>
                                <td>{{ $employee->FullName}}</td>
                                <td>{{ $employee->Email}}</td>
                                <td>{{ $employee->PhoneNumber}}</td>
                                <td>{{ $employee->address}}</td>
                                <td>
                                <a href="{{ route('employee.edit', ['employee' => $employee->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('employee.destroy', ['employee' => $employee->id])}}" class="from-horizontal">
                                        @csrf
                                        @method('DELETE')
                                        <div class="from-group row">
                                            <div class="col-sm-10 offset-2">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                           @empty
                                <h3> Data Not Found </h3>
                            @endforelse
                        </tbody>
                    </table>
                </div>
        </div>

@endsection