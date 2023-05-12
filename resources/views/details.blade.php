@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')

<div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$todos->name}}</h5>
            <p class="card-text">{{$todos->description}}</p>
            <p class="card-text">Created at {{$todos->created_at}}</p>
            <a href="/edit/{{$todos->id}}"><span class="btn btn-primary">Update</span></a>
            <a href="/delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
</div>

@endsection