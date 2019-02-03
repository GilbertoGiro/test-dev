<?php

namespace App\Repository;

use App\Model\Order;

class OrderRepository extends AbstractRepository
{
    /**
     * OrderRepository constructor.
     *
     * @param Order $model
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}