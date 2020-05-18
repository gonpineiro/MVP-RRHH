@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col cl-6">
            <div class="row mt-2">
                <div class="col cl-2 box">
                    <h3 class="table-title">Estado Facturacion </h3>
                    <img src="{{ asset('logos/xlsx.png') }}" class="link">
                </div>
                <div class="col cl-2 text-derecha ">
                    <img src="{{ asset('logos/return-button.png') }}" onclick="goBack()" class="center link">
                </div>
            </div>
            <table class="table table-hover" id="normal">
                <thead>
                    <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Total Puesto</th>
                    </tr>
                </thead>
                <tbody>
                    @while ($pendiente = odbc_fetch_array($pendientes))
                    <tr>
                        <td><a href="pendiente_fac/{{$pendiente['id']}}">{{$pendiente['cliente']}}</a></td>
                        <td>{{$pendiente['total']}}</td>
                    </tr>
                    @endwhile
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="row mt-2">
        <div class="col cl-6">
            <div class="row mt-2">
                <p>Puestos con asignaciones pendientes a facturar.</p>
            </div>
            <div class="row mt-2">
                {{$puestoChart->container()}}
                {!! $puestoChart->script() !!}
            </div>
        </div>
        <div class="col cl-6">
            <div class="row mt-2">
                <h3>Clientes: {{$cantidadClientes}}</h3>
            </div>
            <div class="row mt-2">
                {{$clienteChart->container()}}
                {!! $clienteChart->script() !!}
            </div>
        </div>
    </div>
</div>

@endsection