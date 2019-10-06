<!DOCTYPE html>
<html lang="zh-tw">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luxasia Coffee</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("theme/bootstrap/css/bootstrap.css")}}" rel="stylesheet">

    <!--font awesome icon CSS-->
    <link rel="stylesheet" href="{{asset("css/all.css")}}">

    <!-- Custom styles for this template -->
    <link href="{{asset("theme/css/shop-homepage.css")}}" rel="stylesheet">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 10px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

    </style>
</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div id="mySidenav" class="sidenav">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="">會員資料總覽</a>
        <a href="{{route('userList')}}">員工資料總覽</a>
        <a href="{{route('productList')}}">商品資料總覽</a>
        <a href="#">活動訊息總覽</a>
        <a href="#"></a>

    </div>
    <div class="container">
        {{--        admin 才有side nav bar(not done)--}}
        <span style="font-size:30px;cursor:pointer;color: white" onclick="navTrigger()">&#9776;</span>

        <a class="navbar-brand" href="{{route('homepage')}}">Luxasia Coffee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('homepage')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">訂購商品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">登入註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">聯絡我們</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">


        <div class="col-lg-10">


            @yield('content')

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset("theme/jquery/jquery.min.js")}}"></script>
<script src="{{asset("theme/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

</body>
<script >
    let trigger=0;
    function navTrigger(){
        if(trigger==0){
            openNav();

        }else{
            closeNav();
        }
    }
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        trigger=1;
    }



    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        trigger=0;
    }


</script>
@stack('script')
</html>
