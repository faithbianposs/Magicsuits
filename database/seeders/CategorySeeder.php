<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'SUITE',
            'slug'=>'suite'
        ]);
        Category::create([
            'name'=>'DOBLES',
            'slug'=>'dobles'
        ]);
        Category::create([
            'name'=>'SUITS',
            'slug'=>'suits'
        ]);
        Category::create([
            'name'=>'FAMILIARES',
            'slug'=>'familiares'
        ]);
    }
}
