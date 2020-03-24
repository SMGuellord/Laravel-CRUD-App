@extends('layout')

@section('title')
    Employees List
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Employees List</h1>
            <p><a href="employees/create">Add New Employee</a></p>
        </div>
    </div>

    @foreach($employees as $employee)
        <div class="row">
            <div class="col-2">
                {{ $employee->id}}
            </div>
            <div class="col-4">
            <a href="employees/{{$employee->id}}"> {{$employee->firstname}}</a>
            </div>
            <div class="col-4">
                {{$employee->company->name}}
            </div>
            <div class="col-2">
                {{$employee->phone}}
            </div>
        </div>
    @endforeach
    </div>

    <div class="row">
        <div class="col-12 text-center">
            {{$employees->links()}}
        </div>
    </div>
@endsection
