<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 11:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceEntry extends Model
{
    use SoftDeletes;

    protected $table = 'service_entries';
    public $timestamps = true;

    /**
     * Get the employee by the service entry info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Staff::class);
    }

    /**
     * Get the working day by the service entry info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workingDay()
    {
        return $this->belongsTo(WorkingDay::class);
    }

    /**
     * Get the service by the service entry info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}