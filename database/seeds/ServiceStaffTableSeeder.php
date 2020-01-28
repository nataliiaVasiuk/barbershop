<?php

use Illuminate\Database\Seeder;

class ServiceStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = \App\Models\Service::all();

        $employeeId1 = \App\Models\Staff::where(null, null)->name('Перший працівник')->first()->id;
        $employeeId2 = \App\Models\Staff::where(null, null)->name('Другий працівник')->first()->id;
        $employeeId3 = \App\Models\Staff::where(null, null)->name('Третій працівник')->first()->id;
        $employeeId4 = \App\Models\Staff::where(null, null)->name('Четвертий працівник')->first()->id;
        $employeeId5 = \App\Models\Staff::where(null, null)->name('П\'ятий працівник')->first()->id;

        foreach($services as $service){
            if($service->name == "СТРИЖКА"){
                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId1,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId3,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId5,
                        'service_id' => $service->id
                    ]
                );
            }
            if($service->name == "СТРИЖКА ПІД НАСАДКУ"){
                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId1,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId3,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId4,
                        'service_id' => $service->id
                    ]
                );
            }
            if($service->name == "СТРИЖКА БОРОДИ"){
                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId1,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId2,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId3,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId4,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId5,
                        'service_id' => $service->id
                    ]
                );
            }
            if($service->name == "СТРИЖКА ТА ГОЛІННЯ БОРОДИ"){
                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId1,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId2,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId4,
                        'service_id' => $service->id
                    ]
                );
            }
            if($service->name == "КОРОЛІВСЬКЕ ГОЛІННЯ"){
                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId1,
                        'service_id' => $service->id
                    ]
                );

                \App\Models\ServiceStaff::create(
                    [
                        'employee_id' => $employeeId2,
                        'service_id' => $service->id
                    ]
                );
            }
        }
    }
}
