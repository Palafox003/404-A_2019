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
        //
        DB::table('users')->insert([
            'nombre' =>'PALAFOX',
            'correo'=>'palafox@gmail.com',
            'telefono'=>'123456789',
            'password'=>bcrypt('123456'),
            'role_id'=>1,
        ]);
        DB::table('users')->insert([
            'nombre' =>'ISRAEL',
            'correo'=>'israel@gmail.com',
            'telefono'=>'123456789',
            'password'=>bcrypt('123456'),
            'role_id'=>2,
        ]);
    }
}
