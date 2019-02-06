@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <h1>
                    O que deve ser feito?
                </h1>
            </div>
        </div>
    </div>

    <hr class="mt-3 mb-3">

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-4 mb-5">
                <div class="card-header">
                    <h4 class="mt-1 mb-1 bold">
                        Desenvolvimento Solicitado
                        <i class="fa fa-list-alt float-lg-right" style="margin-top:2px;"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <ul class="m-0 pl-4">
                        <li>
                            <span class="bold"
                                  style="font-size:20px;">Criar uma tela de cadastro de tickets, onde:</span>
                            <ul class="mt-2" style="font-size:17px;">
                                <li class="mt-2">Exista um formulário para cadastrar ticket</li>
                                <li class="mt-2">
                                    Campos do formulário:
                                    <ul>
                                        <li>Nome do cliente</li>
                                        <li>E-mail</li>
                                        <li>Número do Pedido</li>
                                        <li>Título do ticket</li>
                                        <li>Conteúdo do ticket</li>
                                    </ul>
                                </li>
                                <li class="mt-2">
                                    Ao cadastrar um ticket:
                                    <ul>
                                        <li>
                                            Deverá existir uma validação pelo e-mail informado no formulário:
                                            <ul>
                                                <li>
                                                    Se não existir:
                                                    <ul>
                                                        <li>Cadastrar cliente</li>
                                                        <li>Cadastrar o ticket</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Se existir:
                                                    <ul>
                                                        <li>Aproveitar cliente já existente</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Deverá existir uma validação por número do pedido informado no formulário
                                            <ul>
                                                <li>
                                                    Se existir para outro cliente:
                                                    <ul>
                                                        <li>Exibir uma mensagem de erro e não realizar o cadastro</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Se existir para o mesmo cliente:
                                                    <ul>
                                                        <li>Atualizar as informações do ticket</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Mostrar uma mensagem de sucesso após executar o cadastro na tela do
                                            formulário em branco
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-2">
                                    Criar uma tela de relatórios de tickets, onde:
                                    <ul>
                                        <li>Exista um filtro por E-mail e Número do Pedido;</li>
                                        <li>Exista paginação de 5 tickets por página;</li>
                                        <li>
                                            Campos que devem ser exibidos na tela:
                                            <ul>
                                                <li>Numero do ticket;</li>
                                                <li>Número do pedido;</li>
                                                <li>Título do Pedido;</li>
                                                <li>E-mail do cliente;</li>
                                                <li>Data de criação do ticket;</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-2">
                                    Criar tela de visualização de detalhe do ticket com todos os campos da tabela de
                                    tickets
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection