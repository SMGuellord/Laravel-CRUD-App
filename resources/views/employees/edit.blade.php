@extends('layout')

@section('title','Edit Employee'.$employee->firstname)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Edit Details for Employee {{$employee->firstname}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/employees/{{$employee->id}}" method="post"
                enctype="multipart/form-data">
                @method('patch')
                @include('employees.form')
                
                <div class="mt-2 mx-2">
                    <button type="submit" class="btn btn-primary">Save Employee</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
