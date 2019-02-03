<?php

namespace App\Service;

use App\Repository\OrderRepository;

class OrderService
{
    /**
     * @var OrderRepository
     */
    protected $repository;

    /**
     * OrderService constructor.
     *
     * @param OrderRepository $repository
     */
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }
}