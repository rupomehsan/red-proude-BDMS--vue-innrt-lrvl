<?php

namespace App\Modules\UserManagement\Role\Actions;

class Import
{
    static $model = \App\Modules\UserManagement\Role\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "name" => $row['name'],

                    "serial" => $row['serial'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}