@extends('product.layouts.nav')
@section('innerContent')
    <br>
    <!-- Default form contact -->
    <form class="text-center border border-light p-5" action="{{route('postForm')}}" method="post">
        @csrf
        <p class="h4 mb-4 text-left">新增品項</p>


        <input type="text" id="" class="form-control mb-4" placeholder="中文名稱" name="chinese_name">
        <input type="text" id="" class="form-control mb-4" placeholder="英文名稱" name="english_name">
        <input type="text" id="" class="form-control mb-4" placeholder="產品類別" name="type">
        <div class="float-left">
        <p class="custom-control-inline text-left">產品容量：</p>
        <input type="radio" id="" class="custom-control-inline" value="500" name="size" >500
        <input type="radio" id="" class="custom-control-inline" value="700" name="size" >700  ml<br>
        </div>
        <input type="text" id="" class="form-control mb-4" placeholder="價格" name="price">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="產品描述" name="description"></textarea>
        <br>
        <div class="text-left">
        <label for="picture">產品圖片</label><br>

        <input type="file" id="picture" name="pic" accept="image/*">
        <p class="font-italic">***產品圖片大小請設定成500x500 px***</p>
        </div>
        <hr>
        <button class="btn btn-info btn-block" type="submit">儲存</button>

    </form>
    <!-- Default form contact -->

@endsection
