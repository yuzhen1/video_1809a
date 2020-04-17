<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload',"VideoController@oss_upload"); //上传图片
Route::get('/file',"VideoController@oss_file"); //上传文件
Route::get('/cron',"CronController@move_oss");//上传到oss
Route::get('/detail',"VideoController@video_detail");//视频详情
Route::get('/point',"VideoController@video_point");//视频点播

//**********************腾讯云直播***********************
Route::get('/tencent',"VideoController@tencentZhiBo");//视频直播



//*******************************************************

Route::post('/ossNotify',"OssController@ossNotify");//生成日志文件
Route::post('/hui',"OssController@huiDiao");//直播回调地址