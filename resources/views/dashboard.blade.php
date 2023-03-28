
@extends('layouts.main')     
@section('title', 'Dashboard')
@section('content')
<div>

<h1>Meus eventos</h1>

</div>

<div>
    @if(count($events)>0)
    @else

    <p>Ainda não ha'evento, <a href="/events/create">Criar evento</a></p>
@endif
</div>
@endsection