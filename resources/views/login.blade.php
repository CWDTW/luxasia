@extends('layouts.header')
@section('content')
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('userLogin')}}" method="post" >
                            @csrf
                            <h3 class="text-center ">登入</h3>
                            <div class="form-group">
                                <label for="username" class="text">Email:</label><br>
                                <input type="text" name="username" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <div id="register-link" class="text">
                                    <a href="{{route('registerForm')}}" class="text">加入會員</a>|
                                    <a href="">忘記密碼</a>
                                </div>
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="LOGIN">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
