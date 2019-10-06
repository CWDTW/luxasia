@extends('product.layouts.nav')
@section('innerContent')
    <table style="border-collapse: collapse;  width: 100%;" class="table-light">
        <tr >
            <th>商品序號</th>
            <th>中文名稱</th>
            <th>英文名稱</th>
            <th>單位容量</th>
            <th>商品類別</th>
            <th>價格</th>
            <th>修改|刪除</th>
        </tr>
        @foreach( $products as $value)
        <tr >

            <td>{{$value->id}}</td>
            <td>{{$value->chinese_name}}</td>
            <td>{{$value->english_name}}</td>
            <td>{{$value->size}}</td>
            <td>{{$value->type}}</td>
            <td>{{$value->price}}</td>
            <td><a href="{{route('productFormUpdate',[$value->id])}}">修改</a>-
                <a href="{{route('productDelete',[$value->id])}}">刪除</a></td>
            @endforeach
        </tr>
    </table>

@endsection

