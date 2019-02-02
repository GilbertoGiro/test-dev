<?php

namespace App\Repository;

use App\Model\Ticket;

class TicketRepository extends AbstractRepository
{
    /**
     * TicketRepository constructor.
     *
     * @param Ticket $model
     */
    public function __construct(Ticket $model)
    {
        parent::__construct($model);
    }
}