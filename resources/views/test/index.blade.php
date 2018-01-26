@extends('layouts.master')
@section('title', 'Testing')
@section('content')
<h1>Test finish!</h1>
<ul>
    @if(count($names) > 0)
        @foreach($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    @else
        <p class="alert alert-danger">Sorry, nothing to show ...</p>
    @endif
</ul>
@endsection