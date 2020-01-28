<?php

use Illuminate\Database\Seeder;

class WorkScheduleStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startWorkingDay = 9;
        $finishWorkingDay = 18;

        $employeeId1 = \App\Models\Staff::where(null, null)->name('Перший працівник')->first()->id;
        $employeeId2 = \App\Models\Staff::where(null, null)->name('Другий працівник')->first()->id;
        $employeeId3 = \App\Models\Staff::where(null, null)->name('Третій працівник')->first()->id;
        $employeeId4 = \App\Models\Staff::where(null, null)->name('Четвертий працівник')->first()->id;
        $employeeId5 = \App\Models\Staff::where(null, null)->name('П\'ятий працівник')->first()->id;

        $workingDayId1 = \App\Models\WorkingDay::where(null, null)->name('Понеділок')->first()->id;
        $workingDayId2 = \App\Models\WorkingDay::where(null, null)->name('Вівторок')->first()->id;
        $workingDayId3 = \App\Models\WorkingDay::where(null, null)->name('Середа')->first()->id;
        $workingDayId4 = \App\Models\WorkingDay::where(null, null)->name('Четвер')->first()->id;
        $workingDayId5 = \App\Models\WorkingDay::where(null, null)->name('П\'ятниця')->first()->id;
        $workingDayId6 = \App\Models\WorkingDay::where(null, null)->name('Субота')->first()->id;
        $workingDayId7 = \App\Models\WorkingDay::where(null, null)->name('Неділя')->first()->id;

        //employee 1 work from 9.00 by 15.00
        self::createScheduleForEmployee($employeeId1, $startWorkingDay, 15, [$workingDayId6]);
        self::createScheduleForEmployee($employeeId2, $startWorkingDay, $finishWorkingDay, [$workingDayId1, $workingDayId3, $workingDayId5, $workingDayId7]);
        self::createScheduleForEmployee($employeeId3, $startWorkingDay, $finishWorkingDay, [$workingDayId2, $workingDayId4, $workingDayId6, $workingDayId7]);
        self::createScheduleForEmployee($employeeId4, 11, 17, [$workingDayId1, $workingDayId2, $workingDayId3, $workingDayId4, $workingDayId5]);
        self::createScheduleForEmployee($employeeId5, 11, $finishWorkingDay, [$workingDayId6, $workingDayId7]);
    }

    private function createScheduleForEmployee($employeeId, $start, $finish, $dayIds)
    {
        $workingHour = $start;
        $minutes = 0;

        foreach($dayIds as $dayId){
            while($workingHour <  $finish-1){

                if($minutes == 60){
                    $workingHour++;
                    $minutes = 0;
                }
                \App\Models\WorkScheduleStaff::create(
                    [
                        'working_day_id' => $dayId,
                        'employee_id' => $employeeId,
                        'start_at' => $workingHour.":".($minutes == 0 ? "00:00":$minutes.":00"),
                        'finish_at' => ($workingHour+1).":".($minutes == 0 ? "00:00":$minutes.":00"),
                ]
                );

                $minutes += 30;
            }
        }
    }
}
