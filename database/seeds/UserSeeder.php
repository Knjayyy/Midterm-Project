<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'id' => 123,
            'lname' => 'Montanez',
            'fname' => 'Kien',
            'address' => 'Macaas, Tubigon, Bohol',
            'phone'=> '09273082848',
            'email' => 'montanezkien45@gmail.com',
            'password' => bcrypt('password')
        ],
        [
            'id' => 456,
            'lname' => 'Mntnz',
            'fname' => 'Kn',
            'address' => 'Mercury, Venus, Earth',
            'phone'=> '09510776229',
            'email' => 'Kn@gmail.com',
            'password' => bcrypt('password')
        ],
        [
            'id' => 789,
            'lname' => 'Kn',
            'fname' => 'Knjayy',
            'address' => 'Mars, Jupiter, Saturn',
            'phone'=> '09564231897',
            'email' => 'Knjayyy@gmail.com',
            'password' => bcrypt('password')
        ],
    ];

    foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}