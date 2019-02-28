<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/12
 * Time: 2:49 PM
 */

namespace App\Http\Controllers\Teacher\Controller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Teacher\Service\TeacherService;

class TeacherInfoController extends Controller
{
    protected $service;

    public function __construct(TeacherService $service)
    {
        $this->service = $service;
    }

    public function getAllTeachers()
    {
        $data = $this->service->getInfo();
        echo '<pre>';print_r($data);die;
    }
}