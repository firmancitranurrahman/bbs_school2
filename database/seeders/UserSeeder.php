<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $user = User::create([
            'name' => 'Buyono',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('superadmin');

        $user = User::create([
            'name' => 'Sidon',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Misna',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
