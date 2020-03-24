@extends('layout')

@section('title')
    Companies List
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Companies List</h1>
            <p><a href="companies/create">Add New Company</a></p>
        </div>
    </div>

    @foreach($companies as $company)
        <div class="row">
            <div class="col-2">
                {{ $company->id}}
            </div>
            <div class="col-4">
            <a href="companies/{{$company->id}}"> {{$company->name}}</a>
            </div>
            <div class="col-4">
                {{$company->email}}
            </div>
            <div class="col-2">
                {{$company->website}}
            </div>
        </div>
    @endforeach
    </div>

    <div class="row">
        <div class="col-12 text-center">
            {{$companies->links()}}
        </div>
    </div>
@endsection
