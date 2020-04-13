@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/">Back</a>
<h1>{{$todo->title}}</h1>
<p>{{$todo->content}}</p>
<br></br>
<a href="/todo/{{$todo->id}}/edit" class="btn  btn-default">Edit</a>
<br></br>
{!! Form::open (['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }} 
{!! Form::close() !!}
@endsection