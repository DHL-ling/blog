<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/12
 * Time: 2:44 PM
 */
namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeachersModel extends Model
{

    public static function getTeacherInfo()
    {
        $ret = DB::table('teachers')->count();
        return $ret;
        //echo '<pre>';print_r($ret);die;
    }
}