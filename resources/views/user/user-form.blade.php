@extends('user.layouts.user_navbar')
@section('innerContent')
    <br>
    <!-- Default form contact -->
    <form class="text-center border border-light p-5" action="{{route('postUserForm')}}" method="post">
        @csrf
        <p class="h4 mb-4 text-left">員工資料</p>


        <input type="text" id="" class="form-control mb-4" placeholder="稱呼" name="name">
        <input type="text" id="" class="form-control mb-4" placeholder="出生日期" name="birthday">
        <input type="text" id="" class="form-control mb-4" placeholder="聯絡電話" name="phone">
        <input type="text" id="" class="form-control mb-4" placeholder="電子信箱" name="email">
        <input type="password" id="" class="form-control mb-4" placeholder="密碼" name="password">



        <hr>
        <button class="btn btn-info btn-block" type="submit">儲存</button>

    </form>
    <!-- Default form contact -->

@endsection
