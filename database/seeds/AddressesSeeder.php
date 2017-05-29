<?php

use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Address::create([
            'title' => str_random(10),
            'cep' => str_random(5).'-000',
            'complement' => str_random(10),
            'number' => str_random(2),
            'city' => 'Brasília',
            'state' => 'DF',
            'customer_id' => 1,
        ]);
    }
}