@extends('layout')

@section('title','Edit Details for '.$employee->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $employee->name}}</h1>
        </div>
        <div class="mx-3">
            <p><a href="/employees/{{$employee->id}}/edit" type="button" class="btn btn-success">Edit employee</a></p>
        </div>
        <div>
            <form action="/employees/{{$employee->id}}" method="post" class="mb-3">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete Employee</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <p><strong>Firstname</strong> {{$employee->firstname}}</p>
           <p><strong>Email</strong> {{$employee->email}}</p>
           <p><strong>Company</strong> {{$employee->company->name}}</p>
           <p><strong>Phone</strong> {{$employee->phone}}</p>
        </div>
    </div>
@endsection
