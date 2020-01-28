<?php

use Illuminate\Database\Seeder;

class WorkingDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workingDays = [
            ['name' => 'Понеділок'],
            ['name' => 'Вівторок'],
            ['name' => 'Середа'],
            ['name' => 'Четвер'],
            ['name' => 'П\'ятниця'],
            ['name' => 'Субота'],
            ['name' => 'Неділя'],
        ];

        foreach($workingDays as $workingDay) {
            \App\Models\WorkingDay::create($workingDay);
        }
    }
}
