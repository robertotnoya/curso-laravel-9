@extends('layouts.app')

@section('title') edita usuario {{ $user->name}} @endsection

@section('content')
<h1>Novo usuario</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form action="{{ route('users.update',$user->id) }}" method="post">
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Email:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha:">
    @method('PUT')
    @csrf
    <button type="submit">Enviar</button>
</form>

@endsection

