@extends('layouts.app')

@section('content')
<h1>Create todo</h1>
{!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}
    
    {{ Form::bsText('title') }}
    {{ Form::bsTextArea('content') }}
    {{ Form::bsSubmit('save', ['class' => 'btn btn-primary']) }}


{!! Form::close() !!}
@endsection