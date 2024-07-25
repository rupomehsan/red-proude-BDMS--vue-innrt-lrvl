<?php

namespace App\Modules\UserManagement\User\Actions;



class Show
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute($id)
    {
        try {
            $with = ['user_details','user_address_details'];
            $fields = request()->input('fields') ?? [];
            if (empty($fields)) {
                $fields = ['*'];
            }
            if (!$data = self::$model::query()->with($with)->select($fields)->where('id', $id)->first()) {
                return messageResponse('Data not found...',$data, 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
