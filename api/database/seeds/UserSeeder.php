<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'first_name' => 'Davson',
            'last_name'  => 'Santos ',
            'email'      => 'davsonsantos@gmail.com',
            'password'   => bcrypt('password'),
        ]);

        factory(User::class, 5)->create();
    }
}
