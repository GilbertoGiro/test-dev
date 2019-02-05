@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <h1>
                    {{ $ticket->title }}
                </h1>
            </div>
        </div>
    </div>

    <hr class="mt-3 mb-3">

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-4">
                <div class="card-header">
                    <h4 class="mt-1 mb-1 bold">
                        Informações do Ticket
                        <i class="fa fa-ticket-alt float-lg-right" style="margin-top:2px;"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nome do Cliente:</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       value="{{ $ticket->order->user->name }}" readonly disabled>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       value="{{ $ticket->order->user->email }}" readonly disabled>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Título do Ticket</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="{{ $ticket->title }}" readonly disabled>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_number">Número do Pedido</label>
                                <input type="number" name="order_number" class="form-control" id="order_number"
                                       value="{{ $ticket->order->order_number }}" readonly disabled>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="content">Conteúdo do Ticket</label>
                                <textarea name="content" class="form-control"
                                          id="content" readonly disabled>{{ $ticket->content }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <a href="{{ route('ticket.index') }}" class="btn btn-info float-left">
                                <i class="fa fa-arrow-left"></i> Voltar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection