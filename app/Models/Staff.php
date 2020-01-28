<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    protected $table = 'staff';
    public $timestamps = true;

    /**
     * Get the services for the employee.
     * @return HasMany
     */
    public function services()
    {
        return $this->hasMany(ServiceStaff::class, 'employee_id');
    }

    /**
     * Get the work hours for the employee.
     * @return HasMany
     */
    public function workHours()
    {
        return $this->hasMany(WorkScheduleStaff::class);
    }

    /**
     * Get the entries for the employee
     * @return HasMany
     */
    public function serviceEntries()
    {
        return $this->hasMany(ServiceEntry::class);
    }

    /**
     * Scope for employee info by name.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeName($query, $name)
    {
        return $query->where('name', '=', $name);
    }

}