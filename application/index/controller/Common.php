<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
class Common extends Controller
{
	public $token = "";
	public $user = "";
	protected function _initialize()
	{
		$this->isToken();
	}
	/**
	 * 验证token
	 */
	private function isToken(){
		$this->token = input("token");
		if ($this->token) {
			$this->user = db("User")->where(array("token"=>$this->token))->find();
			if (!$this->user['id']) {
				exit(json_encode(array("status"=>0,"info"=>"token错误")));	
			}
			define("UID",$this->user['id']);
		} else {
			exit(json_encode(array("status"=>0,"info"=>"token缺失")));
		}
	}
}