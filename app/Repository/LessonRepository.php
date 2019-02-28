<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/19
 * Time: 2:53 PM
 */
namespace App\Repository;

use App\Model\TeenClassCommentsModel;
use App\Model\TeenClassRecordsModel;

class LessonRepository
{
    protected $commentsModel;
    protected $classRecordsModel;

    public function __construct(TeenClassCommentsModel $commentsModel,
                                TeenClassRecordsModel $classRecordsModel)
    {
        $this->commentsModel = $commentsModel;
        $this->classRecordsModel = $classRecordsModel;
    }

    /*
     * 获取课程有效评价
     * */
    public function getCommentByClassId($class_id)
    {
        $where['rcd_id'] = $class_id;
        $where['status'] = $this->commentsModel::STATUS_VALID;
        return $this->commentsModel::where($where)->get()->toArray();
    }

    /*
     * 获取单节课程信息
     * */
    public function getClassInfo($class_id)
    {
        return $this->classRecordsModel::where('id', $class_id)->get()->toArray();
    }
}