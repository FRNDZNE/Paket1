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
        // Superadmin
        $superadmin = User::create([
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@email.com',
            'password' => bcrypt('rahasia'),
        ]);

        $superadmin->attachRole('superadmin');

        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('rahasia'),
        ]);

        $admin->attachRole('admin');
        
    }
}
