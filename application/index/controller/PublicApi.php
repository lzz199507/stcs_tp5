<?php
namespace app\index\controller;

class PublicApi 
{
    public function index()
    {

    }
    /**
	* 生成token值
	*/
	public function createToken($data = " ")
	{
		$data = time()/rand(8,25).date("YmdHis",time()-rand(100000,999999)).$data;
		$data = str_shuffle($data);
    	$token = base64_encode($data);
    	return $token;
	}
}