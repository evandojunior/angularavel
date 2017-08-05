<?php

use App\User;
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
        User::create([
            'name' => 'Evando Junior',
            'email' => 'evando.junior@live.com',
            'password' => bcrypt(123),
            'remember_token' => str_random(10),
        ]);
        
        factory(User::class, 30)->create();
    }
}
