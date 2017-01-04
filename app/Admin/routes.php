<?php



use Illuminate\Routing\Router;



Route::group([

    'prefix'        => config('admin.prefix'),

    'namespace'     => Admin::controllerNamespace(),

    'middleware'    => ['web', 'admin'],

], function (Router $router) {



    $router->get('/', 'HomeController@index');



    /*分类管理*/

    $router->get('/category', 'CategoryController@index');

    $router->delete('/category/{id}', 'CategoryController@destroy');

    $router->put('/category/{id}', 'CategoryController@update');

    $router->post('/category', 'CategoryController@store');

    $router->any('/category/create', 'CategoryController@create');

    $router->any('/category/{id}/edit', 'CategoryController@edit');



    /*新闻管理*/

    $router->get('/news', 'NewsController@index');

    $router->delete('/news/{id}', 'NewsController@destroy');

    $router->put('/news/{id}', 'NewsController@update');

    $router->post('/news', 'NewsController@store');

    $router->any('/news/create', 'NewsController@create');

    $router->get('/news/{id}/edit', 'NewsController@edit');



    /*图片上传*/

    $router->any('/upload', 'UploadController@index');



    /*轮播图设置*/

    /*$router->get('/rotation', 'RotationController@index');

    $router->any('/rotation/create', 'RotationController@create');

    $router->any('/rotation/{id}/edit', 'RotationController@edit');

    $router->delete('/rotation/{id}', 'RotationController@destroy');

    $router->put('/rotation/{id}', 'RotationController@update');

    $router->post('/rotation', 'RotationController@store');*/

     /*密码修改*/
    $router->resource('users', adminUserController::class);

    
    /*页面头部修改*/
      $router->get('/head', 'PageController@index');

    $router->any('/head/create', 'PageController@create');

    $router->any('/head/{id}/edit', 'PageController@edit');


    $router->put('/head/{id}', 'PageController@update');

    $router->post('/head', 'PageController@store');

    /*产品页面内容修改*/
    $router->get('/good', 'goodContentController@index');

    $router->any('/good/create', 'goodContentController@create');

    $router->any('/good/{id}/edit', 'goodContentController@edit');


    $router->put('/good/{id}', 'goodContentController@update');

    $router->post('/good', 'goodContentController@store');

    /*关于页面内容修改*/
    $router->get('/about', 'aboutContentController@index');

    $router->any('/about/create', 'aboutContentController@create');

    $router->any('/about/{id}/edit', 'aboutContentController@edit');


    $router->put('/about/{id}', 'aboutContentController@update');

    $router->post('/about', 'aboutContentController@store');

    /*s首页页面内容修改*/
    $router->get('/home', 'homeContentController@index');

    $router->any('/home/create', 'homeContentController@create');

    $router->any('/home/{id}/edit', 'homeContentController@edit');


    $router->put('/home/{id}', 'homeContentController@update');

    $router->post('/home', 'homeContentController@store');


     /*友情链接管理*/

    $router->get('/friendurl', 'friendurlController@index');

    $router->delete('/friendurl/{id}', 'friendurlController@destroy');

    $router->put('/friendurl/{id}', 'friendurlController@update');

    $router->post('/friendurl', 'friendurlController@store');

    $router->any('/friendurl/create', 'friendurlController@create');

    $router->any('/friendurl/{id}/edit', 'friendurlController@edit');
});

