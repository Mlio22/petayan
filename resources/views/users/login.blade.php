@extends('template/authMaster')
@section('content')
<div class="Login">
    <div class="container-login">
      <div class='wrap-login'>
        <div class="row">
          <div class="col">
            <div class="login-pic">
              <img src="img/Person buying fresh farm food.jpg" alt="IMG">
            </div>
          </div>
          <div class="col">
            
          <form class='login-form' method='post' action='/login'>
            @csrf
              <div class="login-form-pic">
                <img src="img/mouthwash.svg" alt="IMG">
              </div>
              <span class="login-form-title">
                Selamat Datang
              </span>
              <!--input email-->
              <div class="wrap-input">
                <div class="login-icon-email">
                  <img src = "img/envelope.svg" alt="icon">
                </div>
                <input class="inputLogin" type="text" name="email" placeholder="Email">
              </div>
              <!--input password-->
              <div class="wrap-input">
                <div class="login-icon-password">
                  <img src = "img/padlock.svg" alt="icon">
                </div>
                <input class="inputLogin input-password" type="password" name="pass" placeholder="Password">
              </div>
              <div class="row login-form-other">
                <div class="col-md-9">
                  <!--lupa password & regist-->
                  <div class="text p-t-12">
                    <a class="txt1" href="#">
                      Lupa password?
                    </a>
                  </div>
                  <div class="text">
                    <span class="txt2 ">
                      Belum punya akun (Nama Web)?
                    </span>
                    <a class="txt1" href="#">
                      Daftar
                    </a>
                  </div>
                </div>
                <div class="col">
                  <!--button login-->
                  <div class="container-login-form-btn d-flex justify-content-end">
                    <button class="login-form-btn">
                      Masuk
                    </button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection