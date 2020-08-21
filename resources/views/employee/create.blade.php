@extends('layout')
@section('content')

        <div class="card border-primary mb-3">
            <div class="card-header">Create New Employee</div>
                <div class="card-body">
                   
                    <!-- Form Employee-->

                <form method="POST" action="{{ route('employee.store')}}" class="from-horizontal">

                    @csrf
                    @include('employee.form')
                        <div class="from-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                    

                </div>
        </div>

@endsection