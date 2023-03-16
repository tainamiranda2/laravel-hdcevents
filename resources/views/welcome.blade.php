
@extends('layouts.main')     
@section('title', 'HDC Events')
@section('content')

      

<main>
<h1>Busque um evento</h1>
<form action="">
<input type="text" id="search" name="search" placeholder="Procure um evento" />

</form>
<article>
@foreach($events as $event)

<h2>{{$event -> title}} </h2>

<span>{{$event-> descricao}}</span>
<p>10/08/2023</p>
<p>X participamentes</p>
<a href="">Inscreva-se</a>
@endforeach
</article>
</main>



@endsection