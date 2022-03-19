@extends('layouts.app')

@section('title') edita usuario {{ $user->name}} @endsection

@section('content')
<h1>edita usuario</h1>

@include('includes.message-error')

<form action="{{ route('users.update',$user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection

