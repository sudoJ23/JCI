<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Gula Semut',
            'price' => '16000',
            'qty_init' => '100',
            'qty_in' => '0',
            'qty_out' => '0',
            'unit' => 'kilo',
            'status' => 1,
            'notes' => 'test',
            'description' => 'Gula alami yang baik',
            'user_id' => 1
        ]);
    }
}
