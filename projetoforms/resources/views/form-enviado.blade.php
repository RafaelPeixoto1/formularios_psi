@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
NOME:
    {{$nome}}<br>MORADA:
    {{$morada}}<br>AUTOMOVEL:
    {{$automovel}}<br>
@endsection