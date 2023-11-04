<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'rusdi',
                'username' => 'rusdi',
                'email' => 'ach.rusdhaini@gmail.com',
                'password' => 'anu12345',
                'role' => 'super-admin'
            ],
            [
                'name' => 'ega',
                'username' => 'ega',
                'email' => 'egaalmirajp@gmail.com',
                'password' => 'anu12345',
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'endang',
                'username' => 'endang',
                'email' => 'endangsulistiyani@gmail.com',
                'password' => 'anu12345',
                'role' => 'dosen'
            ],
            [
                'name' => 'dosen',
                'username' => 'dosen',
                'email' => 'dosen@gmail.com',
                'password' => 'anu12345',
                'role' => 'dosen'
            ],
        ];

        foreach ($users as $user) {
            $createUser = User::create([
                'name' => $user['name'],
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);

            $createUser->assignRole($user['role']);
        }
    }
}
