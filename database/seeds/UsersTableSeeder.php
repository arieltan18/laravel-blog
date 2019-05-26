<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

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
        $user = User::where('email','actan1804@gmail.com')->first();

        if(!$user)
        {
            User::create([
                'name'  =>  'Ariel Tan',
                'email' =>  'actan1804@gmail.com',
                'role'  =>  'admin',
                'password'  =>  Hash::make('password')
            ]);
        }
    }
}
