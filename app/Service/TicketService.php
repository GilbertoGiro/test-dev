<?php

namespace App\Service;

use App\Repository\TicketRepository;

class TicketService
{
    /**
     * @var TicketRepository
     */
    protected $repository;

    /**
     * TicketService constructor.
     *
     * @param TicketRepository $repository
     */
    public function __construct(TicketRepository $repository)
    {
        $this->repository = $repository;
    }
}