<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/18
 * Time: 3:32 PM
 */

namespace App\Http\Controllers\Lesson\Controller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Lesson\Service\CommentService;

class Comment  extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }


    /*
     * 获取课程的评价
     * */
    public function getLessonComment()
    {
        $classId = '12377487';
        $data = $this->commentService->getClassComments($classId);
        echo '<pre>';print_r($data);die;
    }

}