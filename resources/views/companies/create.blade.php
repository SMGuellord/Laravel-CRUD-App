@extends('layout')

@section('title','Add New Company')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Company</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/companies" method="post"
                enctype="multipart/form-data">
                
                @include('companies.form')
                
                <div class="mt-2 mx-2">
                    <button type="submit" class="btn btn-primary">Add Company</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
@endsection
