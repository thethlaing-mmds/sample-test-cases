<?php

namespace Tests;

trait ApiTestTrait
{
    private function getAdminUser($permission)
    {
        $admin = \App\User::find(1);

        \Gate::define($permission, function () {
            return true;
        });

        return $admin;
    }
}
