@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後台 - 商品修改</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="SecondHand/public/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">







          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000">購物首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/admin">管理員首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            @guest
              <li class="nav-item">
                <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/login">登入</a></font>
              </li>

              @if (Route::has('register'))
                <li class="nav-item">
                  <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/register">註冊</a></font>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font face="微軟正黑體">
                    {{ Auth::user()->name }} </font><span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <font face="微軟正黑體"><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('登出') }}
                    </a></font>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </ul>
      </div>
    </div>
  </nav>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">



        <!--CSS太難看-->
          <h1>     </h1><br>
        <!--所以靠他們調整版面一下-->

          <div class="row">
            <div class="col-lg-12">
              <form action="/BackstageProduct/update/{{$product->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <font face="微軟正黑體">
                <div class="form-group">
                  <label>名稱：</label>
                  <input type="string" class="form-control" name="name" value="{{$product->name}}" required>
                </div>

                <div class="form-group">
                  <label>圖示：</label>
                  <input type="string" class="form-control" name="picture" value="{{$product->picture}}" required>
                  <br>
                  <img src="{{$product->picture}}" width="50%">
                </div>

                <div class="form-group">
                  <label>時間：</label>
                  <input type="string" class="form-control" name="time" value="{{$product->time}}" required>
                </div>

                <div class="form-group">
                  <label>來源：</label>
                  <input type="string" class="form-control" name="where" value="{{$product->where}}" required>
                </div>

                <div class="form-group">
                  <label>型號：</label>
                  <input type="string" class="form-control" name="source" value="{{$product->source}}" required>
                </div>

                <div class="form-group">
                  <label>價格：</label>
                  <input type="string" class="form-control" name="price" value="{{$product->price}}" required>
                </div>

                <div class="form-group">
                  <label>類別：</label>
                  <input type="string" class="form-control" name="kind" value="{{$product->kind}}" required>
                </div>

                <div class="form-group">
                  <label>庫存：</label>
                  <input type="string" class="form-control" name="stock" value="{{$product->stock}}" required>
                </div>


                <div class="col-lg-12 col-md-10 mx-auto">
                  <button type="submit" class="btn btn-primary"><font face="微軟正黑體" size="4px" >更新</font></button>
                  <a href="http://localhost:8000/BackstageProduct" ><button class="btn btn-primary" type="button"><font face="微軟正黑體" size="4px" >返回</font></button></a>
                </div>
                </font>

              </form>

            <br>


            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>



  </body>

</html>
