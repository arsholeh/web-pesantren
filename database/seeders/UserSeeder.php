<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'abdul',
            'email' => 'abdul@gmail.com',
            'password' => bcrypt('abdul123')

        ];
        
        User::insert($user);
    }

}
