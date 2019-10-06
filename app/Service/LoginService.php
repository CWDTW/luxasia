<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

Class LoginService
{
    public function __construct()
    {
        //
    }
    public function getUserRole($params = [])
    {
        $userEmail = array_get($params, 'email');
        $userPassword = array_get($params, 'password');
        $getUserRole = DB::table('clients')
            ->select([
                'role'
            ])
            ->where('email', '=', $userEmail)
            ->where('password', '=', $userPassword)
            ->first();
        $role = data_get($getUserRole, 'role', '');

        return $role;
    }

    public function getViewRoleKey($role = '')
    {
        $adminTool['admin_key'] = 'no login';
        if ($role === 'admin') {
            $adminTool['admin_key'] = 'open';

        }else if($role === 'agent'){
            $adminTool['admin_key'] = 'close';
        } else if($role === 'user') {
            $adminTool['admin_key'] = 'user';
        }

        return $adminTool;
    }
}
