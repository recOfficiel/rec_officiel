<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $admin = User::create([
            'name' => 'Sebastien Lumuna',
            'email' => 'sebastienlumuna@gmail.com',
            'password' => hash::make('password')


         ]);

           // recuperation du role a affecté a l'utilisateur

           $roleadmin = Role::where('nom', 'admin')->first();
           $admin->roles()->attach($roleadmin);


    }
}
