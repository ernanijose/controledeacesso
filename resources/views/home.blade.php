@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Lista de Chamados</h4>
        
        @forelse($chamados as $key => $value)
            @can('view', $value)
            <a class="btn btn-primary btn-rounded" target="_self" href="/home/{{$value->id}}">{{$value->titulo}}</a>
            @endcan
        @empty
            <b>Nâo existem chamados!</b>
        @endforelse
    </div>
</div>
@endsection
