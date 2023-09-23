<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'bumdes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'farmer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'company',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
