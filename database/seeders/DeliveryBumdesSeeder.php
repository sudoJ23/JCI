<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryBumdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('delivery_bumdes')->insert([
            'driver_name' => 'sugianto',
            'phone_number' => '081657489345',
            'car_type' => 'pickup',
            'charge' => '500000',
            'transaction_id' => 3
        ]);
    }
}
