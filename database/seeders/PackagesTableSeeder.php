<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Basic Package',
                'rate' => 49.99,
                'description' => 'This is the basic package.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Standard Package',
                'rate' => 99.99,
                'description' => 'This is the standard package.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Package',
                'rate' => 199.99,
                'description' => 'This is the premium package.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
