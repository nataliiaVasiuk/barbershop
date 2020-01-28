<?php

namespace App\Repositories;

use App\Models\Staff;

class StaffRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Staff::class;
    }
}
