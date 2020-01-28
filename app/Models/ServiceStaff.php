<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 11:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceStaff extends Model
{
    protected $table = 'service_staff';
    public $timestamps = true;

    /**
     * Get the employee by the service staff info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    /**
     * Get the service by the service staff info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}