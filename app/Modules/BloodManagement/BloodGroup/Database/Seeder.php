<?php

namespace App\Modules\BloodManagement\BloodGroup\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\BloodManagement\BloodGroup\Database\Seeder"
     */
    static $model = \App\Modules\BloodManagement\BloodGroup\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        self::$model::create([
            'name' => 'A (posative)',

        ]);
        self::$model::create([
            'name' => 'A (negative)',

        ]);
        self::$model::create([
            'name' => 'AB (posative)',

        ]);
        self::$model::create([
            'name' => 'AB (negative)',

        ]);
        self::$model::create([
            'name' => 'O (negative)',

        ]);
        self::$model::create([
            'name' => 'O (posative)',

        ]);
        self::$model::create([
            'name' => 'B (posative)',

        ]);
        self::$model::create([
            'name' => 'B (negative)',

        ]);
    }
}
