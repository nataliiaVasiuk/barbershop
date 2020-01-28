<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 11:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    protected $table = 'working_days';
    public $timestamps = false;

    /**
     * Get the work schedules for the staff by working day.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workSchedules()
    {
        return $this->hasMany(WorkScheduleStaff::class);
    }

    /**
     * Get the entries by the work day
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany(ServiceEntry::class);
    }

    /**
     * Scope for working day info by name.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeName($query, $name)
    {
        return $query->where('name', '=', $name);
    }

}