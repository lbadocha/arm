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
        // DB::table('users')->insert([
        //     'login'=>'sysuser',
        //     'name'=>'Sys',
        //     'surname'=>'User',
        //     'password'=>bcrypt('sysuser')
        // ]);

        // DB::table('users')->insert([
        //     'login'=>'lbadocha',
        //     'name'=>'Łukasz',
        //     'surname'=>'Badocha',
        //     'password'=>bcrypt('test')
        // ]);


        DB::table('users')->insert([
            'login'=>'anowak',
            'name'=>'Adam',
            'surname'=>'Nowak',
            'password'=>bcrypt('test')
        ]);


        DB::table('users')->insert([
            'login'=>'pkowalski',
            'name'=>'Piotr',
            'surname'=>'Kowalski',
            'password'=>bcrypt('test')
        ]);
    }
}
