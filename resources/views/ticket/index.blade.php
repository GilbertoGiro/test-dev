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

    <form method="get">
        <div class="row mb-4">
            <div class="col-lg-12">
                <h5 class="mb-3 bold">Buscar tickets:</h5>
            </div>
            <div class="col-lg-3">
                <input type="text" name="email" class="form-control" placeholder="E-mail"
                       value="{{ request()->get('email') }}">
            </div>
            <div class="col-lg-3">
                <input type="number" name="order_number" class="form-control" placeholder="Número do Pedido"
                       value="{{ request()->get('order_number') }}">
            </div>
            <div class="col-lg-3">
                <button class="btn btn-info">
                    Buscar <i class="fa fa-search"></i>
                </button>

                @if(request()->get('email') || request()->get('order_number'))
                    <a href="{{ route('ticket.index') }}" class="btn btn-danger ml-2">
                        Limpar <i class="fa fa-trash"></i>
                    </a>
                @endif
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
                                    <a href="{{ route('ticket.show', $ticket->alias) }}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="6">
                                Nenhum registro encontrado na base de dados.
                            </td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                    @if($tickets->total() > 5)
                        <tr class="text-center">
                            <td colspan="6">
                                {{ $tickets->links() }}
                            </td>
                        </tr>
                    @endif
                </tfoot>
            </table>
        </div>
    </div>
@endsection