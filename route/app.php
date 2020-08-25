<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use app\common\Code;
use think\facade\Route;

// MISS路由
Route::miss(function () {
    return jsonResponse()
        ->setCode(Code::NOT_FOUND_ROUTE)
        ->setHttpCode(404)
        ->setMessage('访问页面不存在')
        ->create();
});

//登录
Route::group('open/', function () {
    //微信开放平台登录
    Route::any('oceanengine', 'Login/index')->append(['origin' => 'wechat_open_platform']);
    //手机号，短信验证码登录
    Route::post('mobile', 'Login/index')->append(['origin' => 'mobile_captcha']);
    //游客登录
    Route::post('visitor', 'Login/index')->append(['origin' => 'signature']);
    //手机号，密码登录
    Route::post('mobile_password', 'Login/index')->append(['origin' => 'mobile_password']);
})->middleware(Request::class);