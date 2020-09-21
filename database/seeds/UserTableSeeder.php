<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@laradev.com.br',
            'password' => bcrypt('teste')
        ]);
    }
}
