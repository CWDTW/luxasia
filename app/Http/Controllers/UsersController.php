<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();


        $data = [
            'users' => $users
        ];

        return view('user.user-show',$data);
    }
    public function getForm()
    {
        return view('user.user-form');
    }

    public function postForm(Request $request)
    {
        $data = $request->all();
        $name="";
        $birthday="";
        $phone="";
        $email="";
        $password="";
        $now=Carbon::now();

        if (!empty(array_get($data, 'name'))) {
            $name = array_get($data, 'name');
        }
        if (!empty(array_get($data, 'birthday'))) {
            $birthday = array_get($data, 'birthday');
        }
        if (!empty(array_get($data, 'phone'))) {
            $phone = array_get($data, 'phone');
        }
        if (!empty(array_get($data, 'email'))) {
            $email = array_get($data, 'email');
        }
        if (!empty(array_get($data, 'password'))) {
            $password = array_get($data, 'password');
        }

        $insertData=[
            'name'=>$name,
            'birthday'=>$birthday,
            'phone'=>$phone,
            'email'=>$email,
            'password'=>$password,
            'created_at'=>$now
        ];

        DB::table('users')->insert(
            $insertData
        );

        return redirect(route("userList"));
    }
    public function userForm($id)
    {
        $user['data']=DB::table('users')->find($id);

        return view ('user.user-form-update', $user);
    }

    public function updateData(Request $request, $id)
    {
        $now=Carbon::now();


        DB::table('users')
            ->where("id", "=", $id)
            ->update([
                'name'=>$request->input("name"),
                'phone'=>$request->input("phone"),
                'email'=>$request->input("email"),
                'birthday'=>$request->input("birthday"),
                'updated_at'=>$now
            ]);

        return redirect(route('userList'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        DB::table('users')->delete($id);

        return redirect(route('userList'));
    }
}
