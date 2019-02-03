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

    /**
     * Method to get paginated Tickets
     *
     * @param int $paginate
     * @return mixed
     */
    public function paginate(int $paginate = 5)
    {
        return $this->model::with(['order.user'])->get();
    }
}