<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/19
 * Time: 4:23 PM
 */
namespace App\Http\Controllers\Lesson\Service;

use App\Repository\LessonRepository;

class CommentService
{

    protected $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    /*
     * 获取课程有效评价
     * */
    public function getClassComments($class_id)
    {
        $commentData = $this->lessonRepository->getCommentByClassId($class_id);

        $classData = $this->lessonRepository->getClassInfo($class_id);

        /*foreach ($class_data as $value){

        }*/
        echo '<pre>';print_r($classData);die;

        return $commentData;
    }
}