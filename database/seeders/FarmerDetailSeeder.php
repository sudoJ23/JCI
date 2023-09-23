<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('farmer_details')->insert([
            'user_id' => 1,
            'description' => 'lorem ipsum',
            'address' => 'Desa Wonoanti, Pacitan',
            'phone_number' => '081657489345'
        ]);
    }
}
