<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Service::class;
    }
}