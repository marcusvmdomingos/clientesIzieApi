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
            'email' => str_random(10).'@gmail.com',
            'gender' => str_random(10),
            'cpf' => str_random(10),
            'birth' => str_random(10),
        ]);
    }
}