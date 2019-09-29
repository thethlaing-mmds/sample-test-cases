<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2019-09-28 23:23:32',
                'updated_at' => '2019-09-28 23:23:32',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2019-09-28 23:23:32',
                'updated_at' => '2019-09-28 23:23:32',
            ],
        ];

        Role::insert($roles);
    }
}
