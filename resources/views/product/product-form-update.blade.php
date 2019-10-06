@extends('product.layouts.nav')
@section('innerContent')
    <br>
    <!-- Default form contact -->
    <form class="text-center border border-light p-5" action="{{route('productRewrite', [$data->id])}}" method="post">
        @csrf
        <p class="h4 mb-4 text-left">品項資料修改</p>


        <input type="text" id="" class="form-control mb-4" placeholder="中文名稱" name="chinese_name" value="{{$data->chinese_name}}">
        <input type="text" id="" class="form-control mb-4" placeholder="英文名稱" name="english_name" value="{{$data->english_name}}">
        <input type="text" id="" class="form-control mb-4" placeholder="產品類別" name="type" value="{{$data->type}}">
        <input type="text" id="" class="form-control mb-4" placeholder="產品類別" name="size" value="{{$data->size}}">

        <input type="text" id="" class="form-control mb-4" placeholder="價格" name="price" value="{{$data->price}}">
        <input class="form-control rounded-0" id="" rows="3" placeholder="產品描述" name="description" value="{{$data->description}}">
        <br>

        <hr>
        <button class="btn btn-info btn-block" type="submit">儲存</button>

    </form>
    <!-- Default form contact -->

@endsection
