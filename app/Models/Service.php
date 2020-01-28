<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 11:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps = true;

    /**
     * Get the staff by type of service
     *
     * @return HasMany
     */
    public function staff()
    {
        return $this->hasMany(ServiceStaff::class);
    }

    /**
     * Get the entries by the service
     *
     * @return HasMany
     */
    public function entries()
    {
        return $this->hasMany(ServiceEntry::class);
    }

    /**
     * Scope for service info by name.
     *
     * @param  Builder  $query
     *
     * @return Builder
     */
    public function scopeName($query, $name)
    {
        return $query->where('name', '=', $name);
    }
}