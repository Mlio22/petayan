<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../css/styleKlikSuatuProduk-Swalayan.css" rel="stylesheet">

    <title>Tani Go Green</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Tani Go Green</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a href="#">
              <button class="btn btn2" type="button"><h5>Kesepakatan Saya</h5></button>
            </a>
            <a href="#">
              <button class="btn btn1" type="button">
                <img src = "../img/user.png" alt="user">
              </button>
            </a>
            <a href="#">
              <button class="btn btn3" type="button"><h5>Logout</h5></button>
            </a>
          </div>
        </div>
      </div>
    </nav>
   <!--Kesepakatan-->
    <div class="produk">
      <div class="container-produk">
        <div class='wrap-produk'>
          <div class="row row-produk">
            <div class="col">
              <div class="img-produk">
                <img src="../img/mangga.jpg" alt="IMG">
              </div>
            </div>
            <div class="col">
              <div class="ket-produk">
                <h1>{{$produk->nama_produk}}</h1>
                <hr>
                <h2>Detail Produk</h2>
                <hr>
                <h3>Harga Produk : <b>Rp.{{$produk->harga_produk}}</b></h3>
                <h3>Kadaluarsa : <b>{{$produk->waktu_kadaluarsa}} hari</b></h3>
                <h3>Kategori : <b>{{$produk->kategori_produk}}</b></h3>
                <hr>
                <h2>Lokasi Petani {{$petani->lokasi_kabupaten}}</h2>
                <hr>
                <h3>Provinsi : <b>{{$petani->lokasi_provinsi}}</b></h3>
                <h3>Kabupaten : <b>{{$petani->lokasi_kabupaten}}</b></h3>
                <h3>Alamat : <b>{{$petani->lokasi_deskripsi}}</b></h3>
                <a href="/submit-kesepakatan/{{$produk->id}}">
                    <button class="btn" type="button"><h4>Submit Request</h4></button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--EndNav-->
    @include('template.header_footer.footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>
