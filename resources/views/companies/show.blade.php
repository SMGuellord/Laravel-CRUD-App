@extends('layout')

@section('title','Edit Details for '.$company->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $company->name}}</h1>
        </div>
        <div class="mx-3">
            <p><a href="/companies/{{$company->id}}/edit" type="button" class="btn btn-success">Edit Company</a></p>
        </div>
        <div>
            <form action="/companies/{{$company->id}}" method="post" class="mb-3">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">Delete Company</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <p><strong>Name</strong> {{$company->name}}</p>
           <p><strong>Email</strong> {{$company->email}}</p>
           <p><strong>Company</strong> {{$company->website}}</p>
        </div>
    </div>

    @if($company->logo)
        <div class="row">
            <div class="col-12">
                <img src="{{asset('storage/'.$company->logo)}}" class="img-thumbnail">
            </div>
        </div>
    @endif
@endsection
