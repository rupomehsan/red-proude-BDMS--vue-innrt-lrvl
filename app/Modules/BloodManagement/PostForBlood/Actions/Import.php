<?php

namespace App\Modules\BloodManagement\PostForBlood\Actions;

class Import
{
    static $model = \App\Modules\BloodManagement\PostForBlood\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "blood_group_id" => $row['blood_group_id'],

                    "hospital_name" => $row['hospital_name'],

                    "division_id" => $row['division_id'],

                    "district_id" => $row['district_id'],

                    "station_id" => $row['station_id'],

                    "phone" => $row['phone'],

                    "date" => $row['date'],

                    "is_emergency" => $row['is_emergency'],

                    "description" => $row['description'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}