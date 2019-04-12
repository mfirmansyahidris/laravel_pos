<?php

use App\User;
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
        User::create([
            'name' => 'manca',
            'email' => 'manca.fi@gmail.com',
            'password' => bcrypt('manca123'),
            'status' => true
        ]);
    }
}
