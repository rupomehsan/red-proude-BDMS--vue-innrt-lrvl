<?php

namespace App\Modules\UserManagement\Role\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\UserManagement\Role\Database\Seeder"
     */
    static $model = \App\Modules\UserManagement\Role\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        $role = [
            'admin',
            'doner',
        ];
        foreach ($role as $index => $item) {
            self::$model::create([
                'name' =>  $item,
                'serial' => $index + 1,
            ]);
        }
    }
}
