@extends('layouts.app')

@section('title') Novo usuario @endsection

@section('content')
<h1>Novo usuario</h1>

@include('includes.message-error')

<form action="{{ route('users.store') }}" method="post">
    @include('users._partials.form')
</form>

@endsection

