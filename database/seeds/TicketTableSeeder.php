<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Ticket;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'title' => 'Ticket 1',
                'content' => 'Este é apenas um ticket de exemplo',
                'alias' => 'ticket-1-1'
            ],
            [
                'title' => 'Ticket 2',
                'content' => 'Este é apenas um ticket de exemplo',
                'alias' => 'ticket-2-1'
            ],
            [
                'title' => 'Ticket 3',
                'content' => 'Este é apenas um ticket de exemplo',
                'alias' => 'ticket-3-1'
            ],
            [
                'title' => 'Ticket 4',
                'content' => 'Este é apenas um ticket de exemplo',
                'alias' => 'ticket-4-1'
            ]
        ];
        foreach ($rows as $row) {
            $exists = Ticket::where('alias', $row['alias'])->first();
            if ($exists) {
                $exists->update($row);
                continue;
            }
            Ticket::create($row);
        }
    }
}
