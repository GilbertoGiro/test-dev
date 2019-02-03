@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <h1>
                    Relatório de Tickets
                </h1>
            </div>
        </div>
    </div>

    <hr class="mt-3 mb-3">

    <form action="">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h5 class="mb-3 bold">Buscar tickets:</h5>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control" placeholder="E-mail">
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control" placeholder="Número do Pedido">
            </div>
            <div class="col-lg-3">
                <button class="btn btn-info">
                    Buscar <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="col-lg-3 text-right">
                <a href="{{ route('ticket.create') }}" class="btn btn-info">
                    Novo Ticket <i class="fa fa-ticket-alt"></i>
                </a>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Número do Ticket</th>
                        <th>Número do Pedido</th>
                        <th>Título</th>
                        <th>E-mail</th>
                        <th>Criado em</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tickets))
                        @foreach($tickets as $ticket)
                            <tr class="text-center">
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->order->order_number }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->order->user->email }}</td>
                                <td>{{ (new \Carbon\Carbon($ticket->created_at))->format('d/m/Y') }}</td>
                                <td>
                                    <button class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="5">
                                Nenhum registro encontrado na base de dados.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection