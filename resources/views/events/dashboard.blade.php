
@extends('layouts.main')     
@section('title', 'Dashboard')
@section('content')
<div>

<h1>Meus eventos</h1>

</div>

<div >
    @if(count($events)>0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Participamentes</th>
                <th>Ações</th>
            </tr>

        </thead>
    
    <tbody>
    <@foreach($events as $event)
    <tr>

<td>{{$loop->index+1}}</td>
<td > <p>{{$event->title}}</p> </td>
<td > <p>0</p> </td>
<td > <a href="/events/{{$event->id}}">Editar</a> 
<button
 href="/events/{{$event->id}}">Deletar</button>
 </td>

</tr>
    @endforeach
    </tbody>
    </table>
    @else

    <p>Ainda não há evento, <a href="/events/create">Criar evento</a></p>
@endif
</div>
@endsection