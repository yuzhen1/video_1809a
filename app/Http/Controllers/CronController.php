<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use OSS\Core\OssException;
use OSS\OssClient;

class CronController extends Controller
{
    protected $accessKeyID = 'LTAIH1Tlj5uO2Ysh';
    protected $accessKeySecret = '2iusAO0v5zS9Q9kBr81OIRz0HwvV8u';
    protected $bucket = 'video-1809a';

    //转移视频到OSS
    public function move_oss(){
        //获取目录下的文件
        $file_path = storage_path('app/public/files');
        //扫描文件夹中的文件
        $file_list = scandir($file_path);
//        echo "<pre>";print_r($file_list);echo "</pre>";

        foreach($file_list as $k=>$v){
            if($v=='.' || $v=='..'){
                continue;
            }
            $file_name = Str::random(6) . '.jpg';
            $local_file = $file_path . '/' . $v;
//            echo "本地文件：".$local_file;echo "<br>";

            //异常捕获
            try{
                //上传到OSS
                $client = new OssClient($this->accessKeyID,$this->accessKeySecret,env('ALI_OSS_ENDPOINT'));
                $res = $client->uploadFile($this->bucket,$file_name,$local_file);
                var_dump($res);
            }catch (OssException $e){
                printf(__FUNCTION__."FAILED\n");
                printf($e->getMessage().'\n');
                return;
            }

            //上传成功后删除文件
            unlink($local_file);

        }

    }
}
