<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['id' => Category::SUSPECT, 'name' => 'Sospechoso'],
        	['id' => Category::CONFIRMED, 'name' => 'Confirmado'],
        ]);
    }
}
