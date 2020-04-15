@extends('layouts.app')

@section('content')
    <h1>TodoApp</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
        <div class="well">
            <h3>  <a href="/todo/{{$todo->id}}"> {{$todo->title}} </a></h3>
        </div>
        @endforeach
@endif

@endsection