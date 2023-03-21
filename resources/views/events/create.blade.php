@extends('layouts.main')     
@section('title', 'Criar Evento')
@section('content')

<h1>Crie um evento</h1>

<form action="/events" method="POST">
@csrf
<label>Titulo</label>
<input type="text" id="title" 
name="title" placeholder="Informe o titulo" />


<label>Cidade</label>
<input type="text" id="city" 
name="city" placeholder="Informe a cidade" />
<label>Evento privado</label>

<select name="private" id="private" >
<option value="1">Sim</option>
<option value="0">Não</option>
</select>
<label>Descrição</label>
<textarea id="descricao" name="descricao" 
placeholder="Informe a descrição um evento" ></textarea>
<label>Adionane items</label>
<div>
<input type="checkbox" name="items[]" value="cadeiras">Cadeiras
</div>
<div>
<input type="checkbox" name="items[]" value="palco">Palco
</div>
<div>
<input type="checkbox" name="items[]" value="cerveja grátis">Cerveja
</div>
<div>
<input type="checkbox" name="items[]" value="open food"/>Open food
</div>
<br>
<input type="submit" value="Criar evento"/>
</form>
@endsection