# Teste PHP para Desenvolvedor

## Instalação:
- Clonar o projeto
- Executar os seguintes comandos no terminal (**Ubuntu**):
    - composer install
    - cp .env.example .env (Substituir os valores referente às configurações de banco)
    - php artisan key:generate
    - php artisan migrate && php artisan db:seed
    - php artisan config:clear && php artisan cache:clear
    - php artisan serve

## Objetivo:
Desenvolver uma ferramenta simples de cadastro de tickets para o setor de atendimento ao cliente da empresa.

## Requisitos:
- Você deve fazer o fork desse projeto no seu repositório;
- Utilizar: Docker, Laravel 5.x e MySQL;
- Devem ser criadas migrations de 3 tabelas relacionadas;

## Escopo:
### 1. Criar uma tela de cadastro de tickets, onde:
- Exista um formulário para cadastrar ticket
- Campos do formulário:
	- Nome do cliente
	- E-mail
	- Número do Pedido
	- Título do ticket
	- Conteúdo do ticket

#### Observação
- Ao cadastrar um ticket:
	- Deverá existir uma validação pelo e-mail informado no formulário:
		- Se não existir:
			- Cadastrar cliente
			- Cadastra o ticket
		- Se existir:
			- Aproveitar cliente já existente
	- Deverá existir uma validação por número do pedido informado no formulário
		- Se existir para outro cliente:
			- Exibir uma mensagem de erro e não realizar o cadastro
		- Se existir para o mesmo cliente:
			- Atualizar as informações do ticket
	- Mostrar uma mensagem de sucesso após executar o cadastro na tela do formulário em branco

- Criar uma tela de relatórios de tickets, onde:
	- Exista um filtro por E-mail e Número do Pedido;
	- Exista paginação de 5 tickets por página;
	- Campos que devem ser exibidos na tela:
		- Numero do ticket;
		- Número do pedido;
		- Título do Pedido;
		- E-mail do cliente;
		- Data de criação do ticket;
- Criar tela de visualização de detalhe do ticket com todos os campos da tabela de tickets
