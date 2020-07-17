<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;
use Psy\Util\Str;
class IndexController extends Controller
{
    public function reg(Request $request){
        return view('user.reg');
    }
    public function regDo(Request $request){
        $user_name = $request->post('user_name');
        $email = $request->post('email');
        $password = $request->post('password');
        $password = password_hash($password,PASSWORD_DEFAULT);
        $data=[
            'user_name'=>$user_name,
            'email'=>$email,
            'password'=>$password
        ];
        $res = UserModel::insertGetId($data);
        if($res){
            echo '成功';
        }else{
            echo '失败';
        }

    }
    public function login(Request $request){
        return view('user.login');
    }
    public function loginDo(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');
        $u = UserModel::where(['email'=>$email])->first();
        $res = password_verify($password,$u->password);
        if($res){
            //将登录的信息存到session
            session(['uid'=>$u->user_id]);
            return redirect('/user/center');die;
        }else{
            echo "请重新登录";
            redirect('/user/login');
        }
    }
    //个人中心
    public function center(){
        if(session()->has('uid')){
            return view('user.center');
        }else{
            echo '2';
        }
    }
}
