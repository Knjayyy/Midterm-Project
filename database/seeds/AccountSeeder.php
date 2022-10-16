<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            [
            'user_id'=> 123,
            'acct_name' => 'Bruce',
            'init_invest'=> 300.00,
            'start_date'=> '2022-07-18',
            'remarks'=> 'Random'
            ],
            [
            'user_id'=> 456,
            'acct_name' =>'Natasha',
            'init_invest'=> 30.00,
            'start_date'=> '2022-10-14',
            'remarks'=> 'Random'
            ],
            [
            'user_id'=> 789,
            'acct_name' => 'Tony',
            'init_invest'=> 10000.00,
            'start_date'=> '2002-07-18',
            'remarks'=> 'Random'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}