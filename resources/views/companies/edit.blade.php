@extends('layout')

@section('title','Edit Customer'.$company->name)

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Edit Details for Company {{$company->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/companies/{{$company->id}}" method="post"
                enctype="multipart/form-data">
                @method('patch')
                @include('companies.form')
                
                <div class="mt-2 mx-2">
                    <button type="submit" class="btn btn-primary">Save Companies</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
