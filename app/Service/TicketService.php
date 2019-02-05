<?php

namespace App\Service;

use App\Repository\OrderRepository;
use App\Repository\TicketRepository;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TicketService
{
    /**
     * @var TicketRepository
     */
    protected $repository;

    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * TicketService constructor.
     *
     * @param TicketRepository $repository
     * @param OrderRepository $orderRepository
     * @param UserRepository $userRepository
     */
    public function __construct(TicketRepository $repository, OrderRepository $orderRepository,
                                UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
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

    /**
     * Method to create ticket
     *
     * @param array $data
     * @return array
     */
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $user = $this->createUser($data);
            $order = $this->orderRepository->findBy(['order_number' => $data['order_number']]);
            if (!empty($order)) {
                $order->ticket->update([
                    'title' => $data['title'],
                    'content' => $data['content']
                ]);
            } else {
                $ticket = $this->repository->create($data);
                $this->orderRepository->create([
                    'order_number' => $data['order_number'],
                    'user_id' => $user->id,
                    'ticket_id' => $ticket->id
                ]);
            }
            DB::commit();
            return ['status' => '00'];
        } catch (\Exception $e) {
            DB::rollback();
            Log::debug($e->getMessage());
            return ['status' => '01', 'message' => 'Não foi possível cadastrar o ticket.'];
        }
    }

    /**
     * Method to create ticket user
     *
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    private function createUser(array $data)
    {
        try {
            $user = [
                'name' => $data['name'],
                'email' => $data['email']
            ];
            return $this->userRepository->firstOrCreate(['email' => $data['email']], $user);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}