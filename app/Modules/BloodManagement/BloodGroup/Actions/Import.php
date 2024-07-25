<?php

namespace App\Modules\BloodManagement\BloodGroup\Actions;

class Import
{
    static $model = \App\Modules\BloodManagement\BloodGroup\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "name" => $row['name'],

                    "description" => $row['description'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}