@extends('layouts.header')
@section('content')

    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('postRegisterForm')}}" method="post" >
                            @csrf
                            <h3 class="text-center ">會員註冊</h3>
                            <div class="form-group">
                                <label for="clientName" class="text">稱呼：</label><br>
                                <input type="text" name="clientName" id="clientName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="birthday" class="text">出生日期</label><br>
                                <input type="date" name="birthday" id="birthday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="text">性別:</label><br>
                                <input type="text" name="sex" id="sex" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text">聯絡電話</label><br>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">


                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="確認送出">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif



@endsection
