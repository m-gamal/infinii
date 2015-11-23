<?php

use Illuminate\Database\Seeder;
class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->increments('id');
        //     $table->enum('type', ['publisher', 'partner', 'customer', 'affiliate', 'referrer']);
        //     $table->string('name');
        //     $table->string('email');
        //     $table->string('address');
        //     $table->string('password');
        //     $table->boolean('active');
        //     $table->timestamps();

        DB::table('members')->insert([
        	'type'			=>	'publisher',
            'name'         	=>  'Publisher 1',
            'email'        	=>  'publisher1@gmail.com',
            'address'       =>  'Publisher 1 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'publisher',
            'name'         	=>  'Publisher 2',
            'email'        	=>  'publisher2@gmail.com',
            'address'       =>  'Publisher 2 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);


        DB::table('members')->insert([
        	'type'			=>	'partner',
            'name'         	=>  'Partner 1',
            'email'        	=>  'partner1@gmail.com',
            'address'       =>  'Partner 1 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'partner',
            'name'         	=>  'Partner 2',
            'email'        	=>  'partner2@gmail.com',
            'address'       =>  'Partner 2 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);


        DB::table('members')->insert([
        	'type'			=>	'customer',
            'name'         	=>  'Customer 1',
            'email'        	=>  'customer1@gmail.com',
            'address'       =>  'Customer 2 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'affiliate',
            'name'         	=>  'Affiliate 1',
            'email'        	=>  'affiliate1@gmail.com',
            'address'       =>  'Affiliate 1 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'affiliate',
            'name'         	=>  'Affiliate 2',
            'email'        	=>  'affiliate2@gmail.com',
            'address'       =>  'Affiliate 2 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'referrer',
            'name'         	=>  'Referrer 1',
            'email'        	=>  'referrer1@gmail.com',
            'address'       =>  'Referrer 1 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('members')->insert([
        	'type'			=>	'referrer',
            'name'         	=>  'Referrer 2',
            'email'        	=>  'referrer2@gmail.com',
            'address'       =>  'Referrer 2 Address',
            'password'      =>  Hash::make('password'),
            'created_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' 	=> 	\Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
