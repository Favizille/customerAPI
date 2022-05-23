<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            "user_id" => 1,
            "name" => "David",
            "active" => 1,
        ]);
        
        Customer::create([
            "user_id" => 2,
            "name" => "Zendaya",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 3,
            "name" => "Yellow",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 4,
            "name" => "Sylias",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 5,
            "name" => "Abigail",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 6,
            "name" => "Mary",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 7,
            "name" => "Olivia",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 8,
            "name" => "Promise",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 9,
            "name" => "Mfon",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 10,
            "name" => "Blessing",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 11,
            "name" => "Grace",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 12,
            "name" => "Abraham",
            "active" => 1,
        ]);

        Customer::create([
            "user_id" => 13,
            "name" => "Daniella",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 14,
            "name" => "Mark",
            "active" => 0,
        ]);

        Customer::create([
            "user_id" => 15,
            "name" => "Rafaelle",
            "active" => 1,
        ]);
    }
}
