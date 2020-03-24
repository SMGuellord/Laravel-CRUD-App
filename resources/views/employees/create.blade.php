@extends('layout')

@section('title','Add New Employee')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Employee</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/employees" method="post"
                enctype="multipart/form-data">
                
                @include('employees.form')
                
                <div class="mt-2 mx-2">
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
