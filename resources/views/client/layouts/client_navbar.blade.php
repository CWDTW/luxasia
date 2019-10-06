@extends('layouts.header')
@section('content')

    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
        <a class="navbar-brand">客戶資料</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('')}}">客戶例表<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('')}}"></a>
                </li>

            </ul>
        </div>
    </nav>
    <br>
    @yield('innerContent')



@endsection
