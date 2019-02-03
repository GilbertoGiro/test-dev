<?php

namespace App\Http\Controllers;

use App\Service\TicketService;

class TicketController
{
    /**
     * @var TicketService
     */
    protected $service;

    /**
     * TicketController constructor.
     *
     * @param TicketService $service
     */
    public function __construct(TicketService $service)
    {
        $this->service = $service;
    }

    /**
     * Method to show tickets report
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $ticketRoute = true;
        $tickets = $this->service->paginate();
        return view('ticket.index', compact('ticketRoute', 'tickets'));
    }

    /**
     * Method to show ticket register form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $ticketRoute = true;
        return view('ticket.create', compact('ticketRoute'));
    }
}