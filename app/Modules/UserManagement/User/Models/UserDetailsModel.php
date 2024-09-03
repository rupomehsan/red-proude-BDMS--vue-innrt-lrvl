<?php

namespace App\Modules\UserManagement\User\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class UserDetailsModel extends EloquentModel
{
    protected $table = "user_details";
    protected $guarded = [];

    protected $appends = ['phone_numbers'];

    protected $casts = [
        'phone' => 'array'
    ];

    static $bloodGroupModel = \App\Modules\BloodManagement\BloodGroup\Models\Model::class;

    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }
            if (auth()->check()) {
                $data->creator = auth()->user()->id;
            }
            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    public function getPhoneNumbersAttribute()
    {
        return  json_decode($this->phone);
    }
    public function blood_group()
    {
        return $this->belongsTo(self::$bloodGroupModel, 'blood_group_id');
    }
}
