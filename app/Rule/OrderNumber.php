<?php

namespace App\Rule;

use App\Model\Order;
use App\Model\User;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;

class OrderNumber implements RuleInterface
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * OrderNumber constructor.
     */
    public function __construct()
    {
        $this->orderRepository = new OrderRepository(new Order());
        $this->userRepository = new UserRepository(new User());
    }

    /**
     * Method to apply validation
     *
     * @param string $key
     * @param $value
     * @return bool
     */
    public function validate(string $key, $value): bool
    {
        $email = request()->get('email');
        $user = $this->userRepository->findBy(['email' => $email]);
        $order = $this->orderRepository->findBy(['order_number' => $value]);
        if ($user && $order) {
            return ($order->user_id === $user->id);
        }
        return !(!$user && $order);
    }
}