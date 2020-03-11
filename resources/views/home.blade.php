@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Lista de Chamados</h4>
        @can('create', App\Chamado::class)
        <a class="btn btn-warning btn-rounded">Criar Chamado</a>
        @endcan
        <ul class="list-unstyled" style="margin: 10px 0;">
        @forelse($chamados as $key => $value)
            <li>
            {{$value->titulo}} 
            @can('view', $value)
            
                @can('update', $value)
                    <a class="btn button-green" target="_self" href="/home/{{$value->id}}">Editar</a>
                @endcan
                @can('delete', $value)
                    <a class="btn btn-danger btn-rounded" target="_self" href="/home/{{$value->id}}">Excluir</a>
                @endcan
            @endcan
            </li>
        
        @empty
            <b>Nâo existem chamados!</b>
        @endforelse
        </ul>
    </div>
</div>
@endsection
