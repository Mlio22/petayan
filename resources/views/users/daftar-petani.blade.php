@extends('template.authMaster')
@section('content')
<div class="dafsu">
    <div class="container-dafsu">
      <form action="/daftar-petani" method="post">
        @csrf
        <div class='wrap-dafsu'>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <span class="dafsu-form-title" >
                        Daftar sebagai Petani
                    </span>
              <div class="dafsu-pic">
                  <img src="img/farmer2 1.svg" alt="IMG">  
                  <div class="col">
                    <div class="dafsuloc-pic">
                        <img src="img/Frame.svg" alt="IMG">      
                    </div>
                  </div>
              </div>
                </div>
                <div class="col">

                  <span class="data-form-title">
                      Data diri
                    </span>
                <div class="col1">
                    <span class="nama-form-title">
                        Nama
                      </span>
                      <div class="col1">
                      <input name="nama" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                    <span class="nama-form-title">
                        Username
                      </span>
                      <div class="col1">
                      <input name="username" class="form-control1" type="text" placeholder=" " aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                    <span class="nama-form-title">
                        Password
                      </span>
                      <div class="col1">
                      <input name="password" class="form-control2" type="password" placeholder=" "  aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                   <span class="nama-form-title">
                       Email
                    </span>
                    <div class="col1">
                     <input name="email" class="form-control2" type="text" placeholder=" " aria-label="default input example">
                    </div>
               </div>
               <div class="col1">
                   <span class="nama-form-title">
                       No HP
                    </span>
                    <div class="col1">
                     <input name="noHp" class="form-control2" type="text" placeholder=" " aria-label="default input example">
                    </div>
               </div>
                <hr class="line"  width="300%"/>
                <span class="alamat-form-title">
                  Alamat
                </span>
                <div class="col1">
                  <span class="nama-form-title">
                      Provinsi
                  </span>
                  <div class="col1">
                    <input name="lokasi_provinsi" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
              </div>
              <div class="col1">
                  <span class="nama-form-title">
                      Kabupaten
                  </span>
                  <div class="col1">
                    <input name="lokasi_kabupaten" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
              </div>
              <div class="col1">
                  <span class="nama-form-title">
                      Alamat Lengkap
                  </span>
                  <div class="col1">
                    <input name="lokasi_deskripsi" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
                    <button class="btn btns"type="submit">Daftar</button>
              </div>
              </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection