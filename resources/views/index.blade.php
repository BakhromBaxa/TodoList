@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <form method="get" action="{{ route('search') }}">
            <div class="form-row">
                <div class=""form-group col-md-10>
                    <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
                </div>
                <div class="form-group col-md-2"><br>
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>
        <div class="col-12 align-self-center"><br>
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item"><a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection