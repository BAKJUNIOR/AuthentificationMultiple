<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       DB::table('users')->insert([
           //admin

           [
               'name'=> 'Admin',
               'username'=> 'admin',
               'email'=> 'admin@gmail.com',
               'password'=> Hash::make('111'),
               'role'=> 'admin',
               'status'=> 'active',
           ],

           //employer

           [
               'name'=> 'Employer',
               'username'=> 'employer',
               'email'=> 'employer@gmail.com',
               'password'=> Hash::make('111'),
               'role'=> 'employer',
               'status'=> 'active',
           ],

           // vendeur
           [
               'name'=> 'Vendeur',
               'username'=> 'vendeur',
               'email'=> 'vendeur@gmail.com',
               'password'=> Hash::make('111'),
               'role'=> 'vendeur',
               'status'=> 'active',
           ]
    ]);
    }
}
