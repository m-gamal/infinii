<?php

use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees')->insert([
            'name'         	=>  'Fee 1',
            'type'			=>	'fixed',
            'amount' 		=>  '3.05',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('fees')->insert([
            'name'         	=>  'Fee 2',
            'type'			=>	'percent',
            'amount' 		=>  '0.01',
            'created_at' 	=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
