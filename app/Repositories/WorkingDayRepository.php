<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 28.01.20
 * Time: 16:54
 */

namespace App\Repositories;

use App\Models\WorkingDay;
use Prettus\Repository\Eloquent\BaseRepository;

class WorkingDayRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return WorkingDay::class;
    }
}