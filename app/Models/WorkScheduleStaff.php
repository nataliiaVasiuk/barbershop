<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 11:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkScheduleStaff extends Model
{
    protected $table = 'work_schedule_staff';
    public $timestamps = true;

    /**
     * Get the employee by the schedule staff info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    /**
     * Get the working day by the schedule staff info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workingDay()
    {
        return $this->belongsTo(WorkingDay::class);
    }
}