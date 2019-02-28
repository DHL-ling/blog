<?php
namespace App\Http\Controllers\Lesson;

class LessonRouter
{
    public static $_route_alias = [
        'Lesson' => [
            ['url' => '/Comment/getLessonComment', 'instance' => 'Comment@getLessonComment']
        ],
    ];
}