@extends('layouts.app')

@section('title') Dados do usuario @endsection

@section('content')
    <h1>Dados do usuario {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>
@endsection

