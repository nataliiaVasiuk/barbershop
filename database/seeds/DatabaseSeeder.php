<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorkingDaysTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ServiceStaffTableSeeder::class);
        $this->call(WorkScheduleStaffTableSeeder::class);
    }
}
