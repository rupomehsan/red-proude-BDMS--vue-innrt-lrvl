<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//UserManagement seeder
use App\Modules\UserManagement\User\Database\Seeder as UserSeeder;
use App\Modules\UserManagement\Role\Database\Seeder as UserRoleSeeder;
//location seeder
use App\Modules\LocationManagement\StateDivision\Database\Seeder as StateDivisionSeeder;
use App\Modules\LocationManagement\District\Database\Seeder as DistrictSeeder;
use App\Modules\LocationManagement\Station\Database\Seeder as StationSeeder;
//UserManagement seeder
use App\Modules\BloodManagement\BloodGroup\Database\Seeder as BloodGroupSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // user management
            UserSeeder::class,
            UserRoleSeeder::class,
            // location management
            StateDivisionSeeder::class,
            DistrictSeeder::class,
            StationSeeder::class,
            // blood management
            BloodGroupSeeder::class

        ]);
    }
}
