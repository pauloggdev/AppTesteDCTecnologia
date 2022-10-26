@extends('layouts.app')
@section('content')
<div class="container">
    <div style="display: flex;justify-content: space-between">
        <h2>Vendas</h2>
        <a href="{{ route('vendas.create') }}" class="btn btn-primary">Nova venda</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Total venda</th>
                    <th scope="col">Nome cliente</th>
                    <th scope="col">Tipo pagamento</th>
                    <th scope="col">Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendas as $venda)
                <tr>
                    <td>{{$venda->id}}</td>
                    <td>{{ number_format($venda->total_venda, 2,',','.')}}</td>
                    <td>{{ $venda->nome_cliente }}</td>
                    <td>{{ $venda->forma_pagamento }}</td>
                    <td>{{ date_format($venda->created_at, 'd/m/Y')}}</td>
                    <td>
                        <a href="{{ route('vendas.print', $venda->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="cursor: pointer" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection