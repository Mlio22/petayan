@extends('template.authMaster')
@section('content')
<div class="dafsu">
    <div class="container-dafsu">
      <div class='wrap-dafsu'>
      <form action="/daftar-swalayan" method="post">
        @csrf
        <div class='wrap-dafsu'>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <span class="dafsu-form-title" >
                        Daftar sebagai Swalayan
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
                      <input required name="nama" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                    <span class="nama-form-title">
                        Username
                      </span>
                      <div class="col1">
                      <input required name="username" class="form-control1" type="text" placeholder=" " aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                    <span class="nama-form-title">
                        Password
                      </span>
                      <div class="col1">
                      <input required name="password" class="form-control2" type="password" placeholder=" "  aria-label="default input example">
                      </div>
                </div>
                <div class="col1">
                   <span class="nama-form-title">
                       Email
                    </span>
                    <div class="col1">
                     <input required name="email" class="form-control2" type="text" placeholder=" " aria-label="default input example">
                    </div>
               </div>
               <div class="col1">
                   <span class="nama-form-title">
                       No HP
                    </span>
                    <div class="col1">
                     <input required name="noHp" class="form-control2" type="text" placeholder=" " aria-label="default input example">
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
                    <input required name="lokasi_provinsi" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
              </div>
              <div class="col1">
                  <span class="nama-form-title">
                      Kabupaten
                  </span>
                  <div class="col1">
                    <input required name="lokasi_kabupaten" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
              </div>
              <div class="col1">
                  <span class="nama-form-title">
                      Alamat Lengkap
                  </span>
                  <div class="col1">
                    <input required name="lokasi_deskripsi" class="form-control0" type="text" placeholder=" " aria-label="default input example">
                  </div>
                    <button class="btn btns"type="submit">Daftar</button>
              </div>
              </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection