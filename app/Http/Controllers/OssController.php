<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OssController extends Controller
{
    //生成日志文件
    public function ossNotify(){
        $json = file_get_contents("php://input");
        $log_str = date("Y-m-d H:i:s").'>>>>>>>>>'.$json."\n";
        file_put_contents("logs/oss.log",$log_str,FILE_APPEND);
    }

    //推流回调、
    public function huiDiao(){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}
