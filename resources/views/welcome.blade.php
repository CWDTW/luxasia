@extends('layouts.header')
@section('content')

    {{--            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">--}}
    {{--                <ol class="carousel-indicators">--}}
    {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
    {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
    {{--                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
    {{--                </ol>--}}
    {{--                <div class="carousel-inner" role="listbox">--}}
    {{--                    <div class="carousel-item active ">--}}
    {{--                        <img class="d-block img-fluid " style="margin:auto" src="{{asset('theme/img/coffee700400.jpg')}}"  alt="First slide">--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item">--}}
    {{--                        <img class="d-block img-fluid" style="margin:auto" src="{{asset('theme/img/leaf700400.jpg')}}"  alt="Second slide">--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item">--}}
    {{--                        <img class="d-block img-fluid" style="margin:auto" src="{{asset('theme/img/tea700400.jpg')}}"   alt="Third slide">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                --}}
    {{--                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
    {{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                    <span class="sr-only">Previous</span>--}}
    {{--                </a>--}}
    {{--                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
    {{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                    <span class="sr-only">Next</span>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    <div>
        <br>
        <button type="button" class="btn btn-default btn-outline-dark" >經典咖啡</button>
        <button type="button" class="btn btn-default btn-outline-dark" >英式茶品</button>
        <button type="button" class="btn btn-default btn-outline-dark" >現萃純茶</button>
        <button type="button" class="btn btn-default btn-outline-dark" >美式冰沙</button>
        <button type="button" class="btn btn-default btn-outline-dark" >鮮果冰茶</button>


    </div>
    <br>
    <div>

    </div>
    <div class="row">


        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/brtishTea.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">精選英式茶系列</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/tea.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">單品風味茶系列</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/others.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">特製風味飲品</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/fruitTea.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">水果茶系列</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/frappe.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">美式冰沙系列</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset("theme/img/wrapanini.jpg")}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">義式磚壓三明治</a>
                    </h4>
                    <p class="card-text">採用印度阿薩姆、斯里蘭卡和肯亞產的茶葉混合而成，口感醇厚濃烈，香氣飽滿，還帶有淡淡的花香</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->
@endsection
