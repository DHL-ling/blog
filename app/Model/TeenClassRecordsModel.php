<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/19
 * Time: 5:54 PM
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeenClassRecordsModel extends Model
{
    protected $table = 'teen_class_records';

    const FREE_TRY_NORMAL = 0; // 常规课
    const FREE_TRY_TEST = 1; // 测评课
    const FREE_TRY_TRY = 2; // 体验课
    const FREE_TRY_HIDDEN = 4; // 待补课
    const FREE_TRY_TRY_PLANT = 6; // 兰迪星球体验课

}