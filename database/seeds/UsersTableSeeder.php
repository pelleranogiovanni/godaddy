<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class,1)->create();
        App\User::create([
        	'name' =>'Franco',
        	'email' => 'franco@mail.com',
        	'password' => bcrypt('123'),
        ]);
    }
}
