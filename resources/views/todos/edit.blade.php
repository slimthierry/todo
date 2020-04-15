@extends('layouts.master')

@section('content')
<a href="/todo/{{$todo->id}}" class="btn btn-default">Back</a>
<h1>Edit todo</h1>
{!! Form::open(['action' => ['TodoController@update', $todo->id] , 'method' => 'POST']) !!}
    
    {{ Form::bsText('title', $todo->title ) }}
    {{ Form::bsTextArea('content', $todo->content) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('save', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
@endsection