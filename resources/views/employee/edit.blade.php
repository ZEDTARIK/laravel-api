@extends('layout')
@section('content')

        <div class="card border-primary mb-3">
            <div class="card-header">Edit Employee : {{$employee->FullName}}</div>
                <div class="card-body">
                   
                    <!-- Form Employee-->

                <form method="POST" action="{{ route('employee.update', ['employee' => $employee->id])}}" class="from-horizontal">
                    @csrf
                    @method('PUT')
                    @include('employee.form')
                    
                        <div class="from-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-warning">Update Employee</button>
                            </div>
                        </div>
                    </form>
                    

                </div>
        </div>

@endsection