@extends('layouts.main')     
@section('title', 'Contatos')
@section('content')

<h1>Crie um evento</h1>
<form action="/events" method="post">

<label>Titulo</label>
<input type="text" id="title" name="title" placeholder="Informe o titulo" />


<label>Cidade</label>
<input type="text" id="city" name="city" placeholder="Informe a cidade" />

<select name="private" id="private" >
<option value="1">Sim</option>
<option value="0">Não</option>
</select>
<label>Descrição</label>
<textarea id="descricao" name="descricao" placeholder="Informe a descrição um evento" ></textarea>

<input type="submit" value="Criar evento"/>
</form>
@endsection