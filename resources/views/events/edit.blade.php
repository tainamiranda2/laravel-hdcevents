@extends('layouts.main')     
@section('title', 'Atualizar Evento:' .$event->title)
@section('content')

<h1>Atualizando evento {{$event->title}}</h1>

<form action="/events/update/{{$event->id}}" method="POST">
@csrf

@method('PUT')
<label>Titulo do evento</label>
<input type="text" id="title" 
value="{{$event->title}}"
name="title" placeholder="Informe o titulo" />

<label>Data do evento</label>
<input type="date" id="date" 

name="date"  />

<label>Cidade</label>
<input type="text" id="city" 
value="{{$event->city}}"
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
<section>
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
</section>
<br>
<input type="submit" value="Criar evento"/>
</form>
@endsection