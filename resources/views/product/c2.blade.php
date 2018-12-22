@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>中古車體零件 - 引擎系統</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="SecondHand/public/css/shop-homepage.css" rel="stylesheet">

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
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000">首頁
                <span class="sr-only">(current)</span>
              </a></font>
            </li>
            <li class="nav-item">
              <font face="微軟正黑體"><a class="nav-link" href="about">聯絡我們</a></font>
            </li>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
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
                <li class="nav-item active">
                  <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/shoppingcart">購物車
                    </a></font>
                </li>
              @endguest
            </ul>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4"><font face="微軟正黑體">中古車體零件</font></h1>
          <h3 class="my-4"><font face="微軟正黑體">引擎系統</font></h3>
          <div class="container">
            <div class="row">
              <div class="col-md-19">
                <font face="微軟正黑體">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="請輸入關鍵字">
                    <span class="input-group-btn">
                                <button class="btn btn-primary">搜尋</button>
                            </span>
                  </div>
                </font>
              </div>
            </div>
          </div>
          <br>


          <div class="list-group">
            <a href="http://localhost:8000/c1" class="list-group-item"><font face="微軟正黑體">傳動系統</font></a>
            <a href="http://localhost:8000/c2" class="list-group-item"><font face="微軟正黑體">引擎系統</font></a>
            <a href="http://localhost:8000/c3" class="list-group-item"><font face="微軟正黑體">冷卻系統</font></a>
            <a href="http://localhost:8000/c4" class="list-group-item"><font face="微軟正黑體">煞車裝置</font></a>
            <a href="http://localhost:8000/c5" class="list-group-item"><font face="微軟正黑體">音響主機</font></a>
            <a href="http://localhost:8000/c6" class="list-group-item"><font face="微軟正黑體">車體、外觀</font></a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/TOYOTA/TOYOTA引擎_3SGE VVT-I 紅頭.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">TOYOTA 3SGE VVT-I 紅頭引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/TOYOTA/TOYOTA引擎_3SGTE_$15000.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">TOYOTA 3SGTE 引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/TOYOTA/TOYOTA引擎_3sgte260.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">TOYOTA 3sgte260 引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/Benz/Benz R172 SLK350  V6 引擎組.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">BENZ R172 SLK350 V6 引擎組</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/Benz/Benz W140 直6 引擎.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">BENZ W140 直6 引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/Benz/Benz W211 320 112949 3.2L 引擎 自排 變速箱.JPG" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">BENZ W211 320 112949 3.2L 引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/Honda/Honda K6 K8引擎.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">HONDA K6 K8引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/Honda/Honda K20A 雙凸引擎.jpg" alt=""></a>
                <div class="card-body">
                  <h6 class="card-title">
                    <a href="#"><font face="微軟正黑體">HONDA K20A 雙凸引擎</font></a>
                  </h6>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <!--<script src="SecondHand/public/js/jquery.min.js"></script> -->
    <!--<script src="SecondHand/public/js/bootstrap.bundle.min.js"></script> -->

  </body>

</html>