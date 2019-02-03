<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Ticket;
use App\Model\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $tickets = Ticket::all();
        foreach ($tickets as $ticket) {
            $exists = Order::where('ticket_id', $ticket->id)->where('user_id', $user->id)->first();
            if ($exists) {
                continue;
            }
            Order::create([
                'user_id' => $user->id,
                'ticket_id' => $ticket->id,
                'order_number' => rand()
            ]);
        }
    }
}
