<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'userName'=>'rabin',
            'userEmail'=>'rabinpjpt@gmail.com',
            'userPassword'=>'12345'
        ]);
    }
}
