<?php

namespace App\Http\Controllers;

use App\VideoModel;
use Illuminate\Http\Request;
use OSS\OssClient;

class VideoController extends Controller
{
    protected $accessKeyID = 'LTAIH1Tlj5uO2Ysh';
    protected $accessKeySecret = '2iusAO0v5zS9Q9kBr81OIRz0HwvV8u';
    protected $bucket = 'video-1809a';

    //图片上传
    public function oss_upload(){
        $client = new OssClient($this->accessKeyID,$this->accessKeySecret,env('ALI_OSS_ENDPOINT'));
        $obj = md5(time().mt_rand(1,99999)).'jpg'; //文件名
        $local_file = 'p1.jpg';
        $res = $client->uploadFile($this->bucket,$obj,$local_file);
        dump($res);
    }

    //文件上传
    public function oss_file(){
        $client = new OssClient($this->accessKeyID,$this->accessKeySecret,env('ALI_OSS_ENDPOINT'));
        $obj = "hello"; //文件名
        $cont = 'hello everyone';
        $res = $client->putObject($this->bucket,$obj,$cont);
        dump($res);
    }

    //s视频详情页
    public function video_detail(){
//        echo 222;
        $vid = $_GET['vid'];
        $v = VideoModel::where(['vid'=>$vid])->first()->toarray();
        return view("video.detail",['v'=>$v]);
    }

    //视频点播
    public function video_point(){
        return view('video/vod');
    }
}
