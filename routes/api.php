<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*Route::group(['namespace' => 'Teacher'], function() {
    Route::get('/info', 'Controller\TeacherInfoController@getAllTeachers')->middleware('check');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::has('lo');*/

$module_router_container = \App\Http\Controllers\Router::getRouter();

foreach($module_router_container as $router_group => $router_instances) {
    $group_router_config = [
        'namespace' => $router_group.'\Controller',
        'prefix' => strtolower($router_group)
    ];
    if(isset($router_instances['group_middleware'])) {
        $group_router_config['middleware'] = $router_instances['group_middleware'];
        unset($router_instances['group_middleware']);
    }
    $group_router = Route::group($group_router_config, function() use ($router_instances) {

        foreach($router_instances as $router_instance) {
            $_method = $router_instance['_method']?? 'get' ;
            $middleware = $router_instance['middleware']?? [] ;

            $allowed_method = [
                'post', 'get', 'patch', 'put', 'delete', 'options', 'any'
            ];
            if(!in_array($_method, $allowed_method)) {
                throw new \Symfony\Component\Routing\Exception\MethodNotAllowedException($allowed_method);
            }
            $router = Route::$_method($router_instance['url'], ['uses' => $router_instance['instance']]);
            //echo '<pre>';print_r($router);die;
            if($middleware) {
                $router->middleware($middleware);
            }
        }
    });
}

