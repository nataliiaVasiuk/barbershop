<?php

namespace App\Repositories;

use App\Models\ServiceEntry;

class ServiceEntryRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return ServiceEntry::class;
    }

    /**
     * @param string $serviceName
     */
    public function getFreeDaysStaffByService(string $serviceName)
    {
        $bookedStaff = $this->getModel()
            ->join('services', 'services.id', '=', 'service_entries.service_id')
            ->where('services.name', '=', $serviceName)->get();

        dd($bookedStaff);
//        return $this->model
//            ->join('work_schedule', 'work_schedule.', '', '', 'left outer')
//            ->join('service_staff', 'service_staff.employee_id', '=', 'work_schedule_staff.employee_id')
//            ->join('services', 'services.id', '=', 'service_staff.service_id')
//            ->where('services.name', '=', $serviceName)->get();
    }
}
