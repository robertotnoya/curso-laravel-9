@extends('layouts.app')

@section('title') Novo usuario @endsection

@section('content')
<h1>Novo usuario</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form action="{{ route('users.store') }}" method="post">
    <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="Email:" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha:">
    @csrf
    <button type="submit">Enviar</button>
</form>

@endsection

