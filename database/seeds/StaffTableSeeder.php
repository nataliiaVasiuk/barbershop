<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = [
            ['name' => 'Перший працівник'],
            ['name' => 'Другий працівник'],
            ['name' => 'Третій працівник'],
            ['name' => 'Четвертий працівник'],
            ['name' => 'П\'ятий працівник'],
        ];

        foreach($staff as $employee) {
            \App\Models\Staff::create($employee);
            //DB::table('employee')->insert($staff);
        }
    }
}
