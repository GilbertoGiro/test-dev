@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <h1>
                    Formulário de Tickets
                </h1>
            </div>
        </div>
    </div>

    <hr class="mt-3 mb-3">

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-4">
                <div class="card-header background-blue color-white">
                    <h4 class="mt-1 mb-1 bold">
                        Cadastro de Tickets
                        <i class="fa fa-ticket-alt float-lg-right" style="margin-top:2px;"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name" class="required-field">Nome do Cliente:</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Nome do Cliente">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email" class="required-field">E-mail do Cliente</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="E-mail do Cliente">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title" class="required-field">Título do Pedido</label>
                                <input type="text" name="title" maxlength="200" class="form-control" id="title"
                                       placeholder="Título do Pedido">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_number" class="required-field">Número do Pedido</label>
                                <input type="number" name="order_number" class="form-control" id="order_number"
                                       placeholder="Número do Pedido">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="content" class="required-field">Conteúdo do Pedido</label>
                                <textarea name="content" class="form-control" id="content"
                                          placeholder="Conteúdo do Pedido"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <a href="{{ route('ticket.index') }}" class="btn btn-info float-left">
                                <i class="fa fa-arrow-left"></i> Voltar
                            </a>

                            <button class="btn btn-success">
                                Adicionar Ticket <i class="fa fa-save"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection