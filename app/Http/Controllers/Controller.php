<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Service\LoginService;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $loginService;
    public function __construct()
    {
        $this->loginService = new LoginService;
    }


    public function loginForm()
    {
        $adminTool['admin_key'] = 'no login';
        return view('login', $adminTool);
    }

    public function login(Request $request)
    {
        $data['email'] = $request->input('email');
        $data['password'] = $request->input('password');

        $role = $this->loginService->getUserRole($data);

        $adminTool = $this->loginService->getViewRoleKey($role);

        if(!empty($adminTool)) {
            return view('login', $adminTool);
        }

        return view('login', $adminTool);
    }

    public function registerForm(){

        return view('register-form');
    }
    public function postRegisterForm(Request $request)
    {
        $clientName='';
        $birthday='';
        $sex='';
        $phone='';
        $email='';
        $password='';
        $_token='';
        $now=Carbon::now();

        $list=$request->all();

        if(!empty(array_get($list,'clientName'))){
            $clientName=array_get($list, 'clientName');
        }
        if(!empty(array_get($list,'birthday'))){
            $birthday=array_get($list, 'birthday');
        }
        if(!empty(array_get($list,'sex'))){
            $sex=array_get($list, 'sex');
        }
        if(!empty(array_get($list,'phone'))){
            $phone=array_get($list, 'phone');
        }
        if(!empty(array_get($list,'email'))){
            $email=array_get($list, 'email');
        }
        if(!empty(array_get($list,'password'))){
            $password=array_get($list, 'password');
        }
        if(!empty(array_get($list,'_token'))){
            $_token=array_get($list, '_token');
        }

        $insertData=[
            'clientName'=>$clientName,
            'birthday'=>$birthday,
            'sex'=>$sex,
            'phone'=>$phone,
            'email'=>$email,
            'password'=>$password,
            'token'=>$_token,
            'created_at'=>$now
        ];


        DB::table('clients')->insert(
            $insertData
        );

        return redirect()->back()->with('alert', '已成為會員! 請重新登入!');

    }
}
