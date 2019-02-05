<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
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

    /**
     * Method to create ticket
     *
     * @param TicketRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TicketRequest $request)
    {
        $condition = $this->service->create($request->all());
        if ($condition['status'] === '00') {
            return redirect()->back()->with('success', 'Ticket criado com sucesso');
        }
        return redirect()->back()->withErrors(['success' => $condition['message']])->withInput($request->all());
    }
}