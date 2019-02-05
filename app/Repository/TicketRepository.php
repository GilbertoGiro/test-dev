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
     * Method to find ticket by alias
     *
     * @param string $alias
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function findByAlias(string $alias)
    {
        return $this->model::with(['order.user'])
            ->where('alias', $alias)
            ->first();
    }

    /**
     * Method to get paginated Tickets
     *
     * @param array $data
     * @param int $limit
     * @return mixed
     */
    public function paginate(array $data, int $limit = 5)
    {
        $result = $this->model::with(['order.user'])->whereHas('order.user', function ($query) use ($data) {
            foreach ($data as $key => $value) {
                if ($key !== 'page') {
                    if (is_numeric($value)) {
                        $query->whereRaw('order_number LIKE ?', '%' . $value . '%');
                        continue;
                    }
                    $query->whereRaw('LOWER(' . $key . ') LIKE LOWER(?)', '%' . $value . '%');
                }
            }
        });
        return $result->paginate($limit);
    }
}