@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/">Back</a>
<h1>{{$test->title}}</h1>
<p>{{$test->content}}</p>
@endsection