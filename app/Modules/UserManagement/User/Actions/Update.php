<?php

namespace App\Modules\UserManagement\User\Actions;

use SebastianBergmann\Diff\Diff;

class Update
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    static $UserDetailsModel = \App\Modules\UserManagement\User\Models\UserDetailsModel::class;
    static $UserAddressDetailsModel = \App\Modules\UserManagement\User\Models\UserAddressDetailsModel::class;

    public static function execute($request, $id)
    {

        try {
            // dd($request->all());
            $addressInfo = json_decode($request->address_info);
            $phoneNumbers = $request->phone_number;

            $userExist = self::$model::where('id', $id)->first();

            if ($userExist) {
                $photo =  $userExist->photo;
                if ($request->hasFile('photo')) {
                    $image = $request->file('photo');
                    $photo = uploader($image, 'uploads/doner');
                }

                $userInfo = [
                    'name' => $request->name,
                    'photo' =>  $photo,
                ];

                if ($userExist) {
                    $userExist->update($userInfo);
                    $user_details = [
                        'blood_group_id' => $request->blood_group_id,
                        'phone' => $phoneNumbers,
                        'gender' => $request->gender,
                        'religion' => $request->religion,
                        'date_of_birth' => $request->date_of_birth,
                    ];

                    $userDetailsExist =    self::$UserDetailsModel::where('user_id', $id)->first();
                    $userDetailsExist->update($user_details);
                    $userAddressIdTrack = [];
                    foreach ($addressInfo as $item) {
                        $item = (array) $item;

                        $address_details = [
                            "user_id" => $id,
                            "division_id" => $item['division_id'],
                            "district_id" => $item['district_id'],
                            "station_id" => $item['station_id'] ?? null,
                            "street_address" => $item['street_address'],
                            "address_type" => $item['address_type']
                        ];
                        if (array_key_exists('id', $item)) {
                            $userAddress = self::$UserAddressDetailsModel::where("id", $item['id'])->first();
                            $userAddressIdTrack[] = $item['id'];
                            $userAddress->update($address_details);
                        } else {
                            $newdata = self::$UserAddressDetailsModel::create($address_details);
                            $userAddressIdTrack[] =  $newdata->id;
                        }
                    }

                    $userAddress = self::$UserAddressDetailsModel::where("user_id", $id)->pluck('id')->toArray();

                    $targetArray = array_diff($userAddress, $userAddressIdTrack);


                    if ($targetArray && count($targetArray)) {
                        self::$UserAddressDetailsModel::whereIn("id", $targetArray)->delete();
                    }


                    return messageResponse('Item update successfully', [], 201);
                }
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
