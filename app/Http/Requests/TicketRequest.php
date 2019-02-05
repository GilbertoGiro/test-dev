<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Request Validation Rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'title' => 'required|string',
            'order_number' => 'required|integer|order_number',
            'content' => 'required|string'
        ];
    }

    /**
     * Request Validation Messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'O campo <b>:attribute</b> é obrigatório',
            'integer' => 'O campo <b>:attribute</b> deve conter um número',
            'string' => 'O campo <b>:attribute</b> deve conter um texto',
            'order_number' => 'O <b>Número do Pedido</b> informado já existe e está vinculado a outro usuário'
        ];
    }

    /**
     * Request Validation Attributes
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Nome do Cliente',
            'email' => 'E-mail do Cliente',
            'title' => 'Título do Ticket',
            'content' => 'Conteúdo do Ticket',
            'order_number' => 'Número do Pedido',
        ];
    }
}