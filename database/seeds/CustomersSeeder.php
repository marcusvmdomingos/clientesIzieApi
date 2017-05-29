<?php

use Illuminate\Database\Seeder;


class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Customer::create([
            'name' => str_random(10),
            'gender' => 'm',
            'email' => str_random(10).'@gmail.com',
            'cpf' => str_random(10),
            'birth' => str_random(10),
        ]);
    }
}