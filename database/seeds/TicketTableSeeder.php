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
            ],
            [
                'title' => 'Ticket 2',
                'content' => 'Este é apenas um ticket de exemplo',
            ],
            [
                'title' => 'Ticket 3',
                'content' => 'Este é apenas um ticket de exemplo',
            ],
            [
                'title' => 'Ticket 4',
                'content' => 'Este é apenas um ticket de exemplo'
            ]
        ];
        foreach ($rows as $row) {
            $exists = Ticket::where('title', $row['title'])->first();
            if ($exists) {
                $exists->update($row);
                continue;
            }
            Ticket::create($row);
        }
    }
}
