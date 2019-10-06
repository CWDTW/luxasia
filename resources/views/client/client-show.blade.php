@extends('client.layouts.client_navbar')
@section('innerContent')
    <table style="border-collapse: collapse;  width: 100%;" class="table-light">
        <tr >
            <th>客戶序號</th>
            <th>客戶姓名</th>
            <th>出生日期</th>
            <th>聯絡電話</th>
            <th>電子信箱</th>
            <th>消費記錄</th>
            <th>建立日期</th>
            <th>更新日期</th>
            <th>修改|刪除</th>
        </tr>
        @foreach( $users as $value)
            <tr >

                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->birthday}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td><a href="{{route('UserFormUpdate', [$value->id])}}">修改</a>-
                    <a href="{{route('userDelete',[$value->id])}}">刪除</a></td>
                @endforeach
            </tr>
    </table>

@endsection

