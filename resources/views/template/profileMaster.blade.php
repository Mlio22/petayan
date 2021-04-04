<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href= "css/style_profile.css" rel="stylesheet">
    <title>Tani Go Green</title>
  </head>
  <body>
  <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Tani Go Green</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            @if($loggedAs == 'petani')
            <a href="/daftar-produk">
              <button class="btn btn1"type="submit">Produk Saya</button>
            </a>
            @endif
            <a href="/daftar-kesepakatan">
              <button class="btn"type="submit">
                <img src="img/handshake 1.png" alt="IMG">
              </button>
            </a>
            <a href="/profile">
              <button class="btn btn4"type="submit">
                <img src="img/user1 1.svg" alt="IMG">
              </button>
            </a>
            <a href="/logout">
              <button class="btn btn3"type="submit">Logout</button>
            </a>
        </div>
      </div>
    </div>
  </nav>
  <!--BodyTambahProduk-->
  <div class="Login">
    <div class="container-login">
      <div class='wrap-login'>
        <div class='wrap-pilihan'>
          <div class="row">

            <div class="col1">
              <a href="/profile">
                <button class="btn bbn"type="submit">Data Diri</button>
              </a>
            </div>

            <div class="col1">
              <a href="/change-password">
                <button class="btn bbn1"type="submit">Ubah Password</button>
              </a>
            </div>
            <div class="col1">
              <a href="/change-data">
                <button class="btn bbn2"type="submit">Ubah Data Diri</button>
              </a>
            </div>
          </div>
        </div>
      @yield('content') 
      </div>
    </div>
  </div>
    
  <!--EndNav-->
  @include('template.header_footer.footer')

  <!-- End Body Login-->   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>