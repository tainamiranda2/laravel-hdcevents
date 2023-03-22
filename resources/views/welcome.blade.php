
@extends('layouts.main')     
@section('title', 'HDC Events')
@section('content')

      

<main>
<h1>Busque um evento</h1>
<form action="/" method="get">
<input type="text" id="search" name="search" 
placeholder="Procure um evento" >

</form>
@if($search)
<h2>Buscando por: {{$search}}</h2>

@else
<h2>Proximo eventos</h2>
<p>Veja todos os eventos</p>
@endif


@foreach($events as $event)
<article>
<h2>{{$event -> title}} </h2>

<span>{{$event-> descricao}}</span>
<p>{{date('d/m/y',strtotime($event->date))}}</p>
<p>X participamentes</p>
<a href="/events/{{$event->id}}">saber mais</a>
</article>
@endforeach

@if(count($events)==0 && $search)
 <p>Não foi encontrado nada na buscs</p>
 @elseif(count($events)==0)
 <p>Não há eventos disponiveis</p>
 @endif
</main>



@endsection