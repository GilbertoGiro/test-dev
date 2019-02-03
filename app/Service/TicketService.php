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

    /**
     * Method to get paginated Tickets (with relations)
     *
     * @param int $paginate
     * @return mixed
     */
    public function paginate(int $paginate = 5)
    {
        return $this->repository->paginate($paginate);
    }
}