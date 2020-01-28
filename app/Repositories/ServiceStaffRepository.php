<?php

namespace App\Repositories;

use App\Models\ServiceStaff;

class ServiceStaffRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return ServiceStaff::class;
    }

    /**
     * @param $serviceName
     * @return mixed
     */
    public function getStaffByService($serviceName)
    {
        return $this->getModel()
            ->join('services', 'services.id', '=', 'service_staff.service_id')
            ->where('services.name', '=', $serviceName)->get()->pluck('service_staff.employee_id');
    }
}
