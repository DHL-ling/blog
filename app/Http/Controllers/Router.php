<?php
// +----------------------------------------------------------------------
// | Landi English [Kids like it]
// +----------------------------------------------------------------------
// | Author: Sivan(<Sivan@landi.com>
// +----------------------------------------------------------------------
// | date: 2018/10/18
// +----------------------------------------------------------------------
// | Time: 上午11:19
// +---------------------

namespace App\Http\Controllers;

use App\Http\Controllers\Lesson\LessonRouter;

class Router
{
    protected static $router_list = [];

    /**
     * register module router
     * @var array
     */
    protected static $_router_instance = [
        LessonRouter::class,
    ];

    protected static function registerRouter()
    {
        foreach(self::$_router_instance as $instance)
        {
            self::$router_list = array_merge(self::$router_list, $instance::$_route_alias);
        }

    }

    /**
     * @return array
     */
    public static function getRouter()
    {
        self::registerRouter();
        return self::$router_list;
    }
}