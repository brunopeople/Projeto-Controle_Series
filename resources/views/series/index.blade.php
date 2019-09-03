@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-sucess">
	{{$mensagem}}
</div>
@endif

<a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item">
    	{{$serie->nome}}
    	<form method="post" action="/series/remover">
    		<button class="btn btn-danger">Excluir</a>
    	</form>
    </li>
    @endforeach
</ul>
@endsection