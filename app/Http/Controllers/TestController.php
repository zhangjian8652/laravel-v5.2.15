<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Controllers\Controller;
use App\Test\TestNamespace;
use App\API\RestAPI;


class TestController extends Controller
{
    /**
     * 显示指定用户的个人信息
     *
     * @param  int  $id
     * @return Response
     */
    public function sendEmail()
    {

        Mail::send('test.test', ['user' => [0,1,2,3]], function ($m){
            $m->to('317758652@qq.com', "jim")->subject('Your Reminder!');
        });
        return view('test.test', []);
    }

    public function testNamespace(){
        RestAPI::test();
        echo TestNamespace::getMessage();
    }

}