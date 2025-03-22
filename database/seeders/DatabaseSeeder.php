<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('asdfasdf');
        $user->phone = "03144918120";
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = "Shakeel Ahmad";
        $user->email = "shakeel2717@gmail.com";
        $user->phone = "03037702717";
        $user->password = bcrypt('asdfasdf');
        $user->save();
    }
}
