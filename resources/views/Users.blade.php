@extends('layouts.nav')
{{-- <h1 style="color:red">hello world {{ $username }}!!</h1> --}}
@section('title')
users
@endsection

@section('content')
<h1>This is users page</h1>
@endsection

@section('sidebar')
@parent
<h1>This is MO</h1>
@endsection
