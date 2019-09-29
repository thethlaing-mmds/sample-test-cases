<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '17',
                'title'      => 'post_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '18',
                'title'      => 'post_edit',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '19',
                'title'      => 'post_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '20',
                'title'      => 'post_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '21',
                'title'      => 'post_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '22',
                'title'      => 'comment_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '23',
                'title'      => 'comment_edit',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '24',
                'title'      => 'comment_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '25',
                'title'      => 'comment_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '26',
                'title'      => 'comment_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '27',
                'title'      => 'user_alert_create',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '28',
                'title'      => 'user_alert_show',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '29',
                'title'      => 'user_alert_delete',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
            [
                'id'         => '30',
                'title'      => 'user_alert_access',
                'created_at' => '2019-09-28 23:26:23',
                'updated_at' => '2019-09-28 23:26:23',
            ],
        ];

        Permission::insert($permissions);
    }
}
