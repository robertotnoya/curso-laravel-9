@extends('layouts.app')

@section('title') Lista de usuarios @endsection

@section('content')
<h1>Lista de usuarios <a href="{{ route('users.create') }}">(+)</a> </h1>

<form action="{{ route('users.index') }}" method="get">
    <input type="text" name="search">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ($users as $user)
    <li>
        {{ $user->name }} - {{ $user->email }}
        | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        | <a href="{{ route('users.show', $user->id) }}"> Detalhes</a>
    </li>
    @endforeach
</ul>
@endsection


