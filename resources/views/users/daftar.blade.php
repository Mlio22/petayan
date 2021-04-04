@extends('template/authMaster')
@section('content')
<div class="Login">
    <div class="container-login">
      <div class='wrap-login'>
        <span class="judul-form-title" >
          Daftar Sekarang
        </span>
        <div class="row">
          <div class="col">
            <div class="swalayan-pic">
              <img src="img/Swalayan 1.svg" alt="IMG">
              <span class="swalayan-form-title">
                Swalayan
              </span>
              <a href="/daftar-swalayan">
                <button class="btn btn3" type="submit">Daftar</button>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="col">
              <div class="petani-pic">
                <img src="img/farmer2 1.svg" alt="IMG">
                <span class="petani-form-title">
                  Petani
                </span>
                <a href="/daftar-petani">
                  <button class="btn btn3" type="submit">Daftar</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection