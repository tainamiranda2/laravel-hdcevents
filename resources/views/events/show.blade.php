@extends('layouts.main')     
@section('title', $event->title)
@section('content')


<article>
<h2>{{$event -> title}} </h2>


<p>10/08/2023</p>
<p>{{$event-> city}}</p>
<p>X participamentes</p>
<a href="/">Confirma presença</a>
<h3>Sobre o evento</h3>
<span>{{$event-> descricao}}</span>
</article>


@endsection