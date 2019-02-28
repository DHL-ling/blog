<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/12
 * Time: 3:54 PM
 */

namespace App\Http\Controllers\Teacher\Service;

use App\Model\TeachersModel;

class TeacherService
{

    public function getInfo()
    {
        $data = TeachersModel::getTeacherInfo();
        return $data;
    }

}