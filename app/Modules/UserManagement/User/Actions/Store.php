<?php

namespace App\Modules\UserManagement\User\Actions;

use Illuminate\Support\Facades\Hash;

class Store
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $UserDetailsModel = \App\Modules\UserManagement\User\Models\UserDetailsModel::class;
    static $UserAddressDetailsModel = \App\Modules\UserManagement\User\Models\UserAddressDetailsModel::class;

    public static function execute($request)
    {
        try {
            // dd($request->all());

            $addressInfo = json_decode($request->address_info);
            $phoneNumbers = $request->phone_number;
            $photo = 'avatar.png';

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $photo = uploader($image, 'uploads/doner');
            }


            $userInfo = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
                'photo' =>  $photo,
            ];



            if ($data = self::$model::query()->create($userInfo)) {

                $user_details = [
                    'user_id' => $data->id,
                    'blood_group_id' => $request->blood_group_id,
                    'phone' => $phoneNumbers,
                    'gender' => $request->gender,
                    'religion' => $request->religion,
                    'date_of_birth' => $request->date_of_birth,
                ];
                self::$UserDetailsModel::create($user_details);
                foreach ($addressInfo as $item) {
                    $address_details = [
                        'user_id' => $data->id,
                        "division_id" => $item->division_id,
                        "district_id" => $item->district_id,
                        "station_id" => $item->station_id,
                        "street_address" => $item->street_address,
                        "address_type" => $item->address_type,
                    ];
                    self::$UserAddressDetailsModel::create($address_details);
                }

                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
