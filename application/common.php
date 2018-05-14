<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 返回JSON统一格式
 */
function V($status = "-1", $info = "", $data = array())
{
    if ($status == "-1") {
    	exit("参数调用错误");
    }
    return array("status"=>$status, "info"=>$info, "data"=>$data);
}
/**
 * 用于测试打印数组数据
 */
function p($arr)
{
	header('content-type:text/html;charset=utf-8');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}