<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Service\TicketService;
use Illuminate\Http\Request;

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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $ticketRoute = true;
        $tickets = $this->service->paginate($request->all());
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
        return redirect()->back()->withErrors(['error' => $condition['message']])->withInput($request->all());
    }

    /**
     * Method to show Ticket information
     *
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $ticketRoute = true;
        if (!is_numeric($alias)) {
            $ticket = $this->service->findByAlias($alias);
            if ($ticket) {
                return view('ticket.show', compact('ticket', 'ticketRoute'));
            }
        }
        return redirect()->route('ticket.index')->withErrors(['error' => 'Ticket não encontrado']);
    }
}