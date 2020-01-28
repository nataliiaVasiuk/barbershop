<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\ServiceEntry;
use App\Models\ServiceStaff;
use App\Models\Staff;
use App\Models\WorkingDay;
use App\Models\WorkScheduleStaff;
use App\Repositories\ServiceEntryRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\ServiceStaffRepository;
use App\Repositories\StaffRepository;
use App\Repositories\WorkingDayRepository;
use App\Repositories\WorkScheduleStaffRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    private $map = [
        ServiceEntryRepository::class => ServiceEntry::class,
        ServiceRepository::class => Service::class,
        ServiceStaffRepository::class => ServiceStaff::class,
        StaffRepository::class => Staff::class,
        WorkingDayRepository::class => WorkingDay::class,
        WorkScheduleStaffRepository::class => WorkScheduleStaff::class,
    ];

    /**
     * @return \Illuminate\Contracts\Foundation\Application
     */
    private function getContainer()
    {
        return $this->app;
    }

    /**
     * @return void
     */
    public function register()
    {
        foreach ($this->map as $repositoryClass => $modelClass) {
            $this->getContainer()->singleton($repositoryClass, function() use ($repositoryClass, $modelClass) {
                return $repositoryClass($this->app);
            });
        }
    }
}
