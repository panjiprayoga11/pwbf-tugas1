<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
            'name'=>'Panji',
            'email'=>'email@gmail.com',
            'password'=>Hash::make('aqsq1234')
        ]);
        DB::table('users')-> insert([
            'name'=>'Made',
            'email'=>'example@gmail.com',
            'password'=>Hash::make('123456')
        ]);
    }
}
