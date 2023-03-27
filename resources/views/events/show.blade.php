@extends('layouts.main')     
@section('title', $event->title)
@section('content')


<article>
<h1>{{$event -> title}} </h1>


<p>{{date('d/m/y',strtotime($event->date))}}</p>
<p>{{$event-> city}}</p>

<p>X participamentes</p>
<a href="/">Confirma presença</a>
<h3>O evento conta com:</h3>
<ul>
    @foreach($event->items as $item)

    <li>{{$item}}</li>

    @endforeach
</ul>
<h3>Sobre o evento</h3>
<span>{{$event-> descricao}}</span>
</article>


@endsection