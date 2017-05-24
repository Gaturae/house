<?php
namespace Home\Controller;
use Home\Model\UserInfoModel;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->display();
    }

    public function php(){
		$json = json_encode($_POST);
        echo $json;    
    }

    public function login(){
        $this->display();
    }

    public function regist(){
        $this->display();
    }

    public function  loginAction(){

        $user = new CommonModel('UserModel');


//        $data = array(
//            'username' => 'zhangsan',
//            'password' => '111111',
//        );

        $result = $user->select();
        echo $result;

//        {
//
//            if(($_POST["name"]==$row["username"])&&($_POST["password"]==$row["password"])){
//                $arr = array ("code"=>"success");
//                break;
//            }
//        }
//
//        $json = json_encode($arr);
//        echo $json;
    }
}