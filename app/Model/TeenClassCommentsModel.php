<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/19
 * Time: 2:20 PM
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeenClassCommentsModel extends Model
{
    protected $table = 'teen_class_comments';

    const STATUS_INVALID = -1;
    const STATUS_VALID = 1;
    const STATUS_PENDING = 2;

}