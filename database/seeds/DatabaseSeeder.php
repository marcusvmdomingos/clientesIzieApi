<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CustomersSeeder::class);
        $this->call(AddressesSeeder::class);

        Model::reguard();
    }
}

