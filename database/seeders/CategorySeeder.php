<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name' => 'Tình Yêu'
        ]);
        Category::insert([
            'name' => 'Cuộc Sống'
        ]);
        Category::insert([
            'name' => 'Công Việc'
        ]);
        Category::insert([
            'name' => 'Học Tập'
        ]);
    }
}
