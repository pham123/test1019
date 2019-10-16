@extends('layouts.app')


@section('content')
    <h1>Hello world</h1>
    @foreach($abcs as $test)
        {{ $test->testsvalue }}
    @endforeach

@endsection