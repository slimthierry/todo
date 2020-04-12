@extends('layouts.app')

@section('content')
<h1>TodoApp</h1>
@if(count($tests) > 0)
@foreach($tests as $test)
<div class="container">
<h3>  <a href="test/{{$test->id}}"> {{$test->title}} </a></h3>
</div>
@endforeach
@endif

@endsection