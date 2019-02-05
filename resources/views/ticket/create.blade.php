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
                <div class="card-header">
                    <h4 class="mt-1 mb-1 bold">
                        Cadastro de Tickets
                        <i class="fa fa-ticket-alt float-lg-right" style="margin-top:2px;"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="required-field">Nome do Cliente:</label>
                                    <input type="text" name="name"
                                           class="form-control {{ $errors->has('name') ? 'required' : '' }}" id="name"
                                           placeholder="Nome do Cliente" value="{{ old('name') }}">
                                    <span class="error-message">
                                        {!! $errors->first('name') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email" class="required-field">E-mail do Cliente</label>
                                    <input type="email" name="email"
                                           class="form-control {{ $errors->has('email') ? 'required' : '' }}" id="email"
                                           placeholder="E-mail do Cliente" value="{{ old('email') }}">
                                    <span class="error-message">
                                        {!! $errors->first('email') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title" class="required-field">Título do Ticket</label>
                                    <input type="text" name="title" maxlength="200"
                                           class="form-control {{ $errors->has('title') ? 'required' : '' }}" id="title"
                                           placeholder="Título do Pedido" value="{{ old('title') }}">
                                    <span class="error-message">
                                        {!! $errors->first('title') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="order_number" class="required-field">Número do Pedido</label>
                                    <input type="number" name="order_number"
                                           class="form-control {{ $errors->has('order_number') ? 'required' : '' }}"
                                           id="order_number"
                                           placeholder="Número do Pedido" value="{{ old('order_number') }}">
                                    <span class="error-message">
                                        {!! $errors->first('order_number') !!}
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="content" class="required-field">Conteúdo do Ticket</label>
                                    <textarea name="content"
                                              class="form-control {{ $errors->has('content') ? 'required' : '' }}"
                                              id="content"
                                              placeholder="Conteúdo do Pedido">{{ old('content') }}</textarea>
                                    <span class="error-message">
                                        {!! $errors->first('content') !!}
                                    </span>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection