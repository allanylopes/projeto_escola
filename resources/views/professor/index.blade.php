@extends('layouts.master')

@section('title', 'Lista dos professores')

@section('content')

<h1>Lista dos professores</h1>
<ul> 
@foreach($professor as $pro)
    <li>
        Nome: {{$pro->nome}} - CPF: {{$pro->cpf}} - Telefone: {{$pro->telefone}}
    </li>
    @endforeach
</ul>

@endsection
    
