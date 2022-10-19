<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Sale',
        ]);
        Category::factory()->create([
            'name' => 'Transport',
        ]);
        Category::factory()->create([
            'name' => 'Logistic',
        ]);
    }
}
