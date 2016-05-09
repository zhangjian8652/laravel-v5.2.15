<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/9
 * Time: 20:25
 */
namespace App\API;

use Log;
include("httpful.phar");


class RestAPI{
    public static function test(){
        $response = \Httpful\Request::get('https://www.baidu.com')->send();
        echo $response->body;
        Log::debug($response->body);
    }
}
