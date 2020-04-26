<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'Home/index';
    }

    //测试使用U函数生成URL地址
    public function testUrl()
    {
    	echo U('index', 'id=2');
    }
}