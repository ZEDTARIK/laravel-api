@extends('layout')
@section('content')
        <div class="card border-secondary mb-3">
            <div class="card-header">Employee : {{$employee->FullName}}</div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $employee->created_at }}
                    </li>              
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$employee->Email}}
                    </li>                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$employee->PhoneNumber}}
                    </li>                   
                    </li>                    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$employee->address}}
                    </li>                   
                </ul>
            </div>
        </div>
@endsection