<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'user', 'guard_name' => 'web']);
        User::create(['user_id' => '1', 'fio' => 'admin', 'email' => 'admin@admin.ru', 'number' => '0', 'password' => Hash::make('admin')]);

        $user = User::find(1);
        $user->assignRole('admin');
    }
}
