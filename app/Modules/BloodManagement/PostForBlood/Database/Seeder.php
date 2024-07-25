<?php
namespace App\Modules\BloodManagement\PostForBlood\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\BloodManagement\PostForBlood\Database\Seeder"
     */
    static $model = \App\Modules\BloodManagement\PostForBlood\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'blood_group_id' => facker()->name,
            'hospital_name' => facker()->name,
            'division_id' => facker()->name,
            'district_id' => facker()->name,
            'station_id' => facker()->name,
            'phone' => facker()->name,
            'date' => facker()->name,
            'is_emergency' => facker()->name,
            'description' => facker()->name,
            ]);
        }
    }
}