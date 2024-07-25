<?php

namespace App\Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    protected $table = "otp_codes";
    protected $guarded = [];
}
