<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Groceries;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // TODO: maak voor iedere entiteit (categories, groceries, etc.) een aparte seeder, en roep
        // deze allemaal afzonderlijk aan vanuit deze class

        #seed Categories
        $category = Category::create(['name' => 'Baked Goods']);
        $category = Category::create(['name' => 'Beverages']);
        $category = Category::create(['name' => 'Canned Goods']);
        $category = Category::create(['name' => 'Dairy']);
        $category = Category::create(['name' => 'Dry/Baking Goods']);
        $category = Category::create(['name' => 'Frozen Foods']);
        $category = Category::create(['name' => 'Meat']);
        $category = Category::create(['name' => 'Produce']);
        $category = Category::create(['name' => 'Other']);

        #Seed Groceries
        Groceries::factory()->create([
            'category_id' => $category->find(1),
            'name' => 'Bread',
            'amount' => '1',
            'price' => '1.00'
        ]);

        Groceries::factory()->create([
            'category_id' => $category->find(8),
            'name' => 'Brocolli',
            'amount' => '2',
            'price' => '0.99'
        ]);

        Groceries::factory()->create([
            'category_id' => $category->find(1),
            'name' => 'Krentebollen',
            'amount' => '4',
            'price' => '1.20'
        ]);

        Groceries::factory()->create([
            'category_id' => $category->find(9),
            'name' => 'Nuts',
            'amount' => '3',
            'price' => '2.99'
        ]);
    }
}
