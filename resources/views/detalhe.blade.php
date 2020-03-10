@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @can('view', $chamado)
        <h4>Detalhe do Chamado</h4>
        
        Titulo: {{ $chamado->titulo }}
        @else 
        <h5>Você não tem autorização!!!</h5>
        @endcan
    </div>
</div>
@endsection
