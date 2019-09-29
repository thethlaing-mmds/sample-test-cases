<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$CpkmtEUOYiTF8MNmn7KKiOihI70sfTjw9hwaOAm5h/xx4DHoLygfm',
                'remember_token' => null,
                'created_at'     => '2019-09-28 23:23:32',
                'updated_at'     => '2019-09-28 23:23:32',
            ],
        ];

        User::insert($users);
    }
}
