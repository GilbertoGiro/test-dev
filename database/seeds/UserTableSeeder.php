<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserTableSeeder extends Seeder
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
                'name' => 'Gilberto Giro Resende',
                'email' => 'gilberto.giro.resende@gmail.com'
            ]
        ];
        foreach ($rows as $row) {
            $exists = User::where('email', $row['email'])->first();
            if ($exists) {
                $exists->update($row);
                continue;
            }
            User::create($row);
        }
    }
}
