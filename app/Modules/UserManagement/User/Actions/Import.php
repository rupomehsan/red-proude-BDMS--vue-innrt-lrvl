<?php

namespace App\Modules\UserManagement\User\Actions;

class Import
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "name" => $row['name'],

                    "email" => $row['email'],

                    "phone" => $row['phone'],

                    "password" => $row['password'],

                    "role_id" => $row['role_id'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}