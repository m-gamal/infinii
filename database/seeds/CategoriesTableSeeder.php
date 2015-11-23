<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'         	=>  'Category 1',
            'static_name' 	=>  'category-1',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 2',
            'static_name' 	=>  'category-2',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 3',
            'static_name' 	=>  'category-3',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 4',
            'static_name' 	=>  'category-4',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 5',
            'static_name' 	=>  'category-5',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 6',
            'static_name' 	=>  'category-6',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('categories')->insert([
            'name'         	=>  'Category 7',
            'static_name' 	=>  'category-7',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}