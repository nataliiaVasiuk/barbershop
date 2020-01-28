<?php

namespace App\Repositories;

use App\Models\WorkScheduleStaff;

class WorkScheduleStaffRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return WorkScheduleStaff::class;
    }

    public function getWorkHoursStaffByService($serviceName)
    {
        return $this->model
            ->join('service_staff', 'service_staff.employee_id', '=', 'work_schedule_staff.employee_id')
            ->join('services', 'services.id', '=', 'service_staff.service_id')
            ->where('services.name', '=', $serviceName)->get();
    }
}
