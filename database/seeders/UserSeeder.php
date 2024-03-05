<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       $admin =  User::create([
            'first_name' => 'Chan',
            'last_name' => 'Kei',
            'email' => 'admin@company.com',
            'phone' => '+998901234567',
            'password' => Hash::make('secret1234'),
        ]);

       $admin->roles()->attach(1);

       User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
