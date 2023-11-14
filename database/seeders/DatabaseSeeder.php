<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Groceries;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Groceries::factory()->create([
            'name' => 'Brood',
            'amount' => '1',
            'price' => '1.00'
        ]);

        Groceries::factory()->create([
            'name' => 'Brocolli',
            'amount' => '2',
            'price' => '0.99'
        ]);

        Groceries::factory()->create([
            'name' => 'Krentebollen',
            'amount' => '4',
            'price' => '1.20'
        ]);

        Groceries::factory()->create([
            'name' => 'Noten',
            'amount' => '3',
            'price' => '2.99'
        ]);
    }
}
